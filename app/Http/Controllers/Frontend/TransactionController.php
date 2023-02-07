<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use Midtrans\Snap;
use App\Models\Cart;
use Midtrans\Config;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionObat;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $data = $request->all();

        // get carts data
        $carts = Cart::with(['obat'])->where('user_id', Auth::user()->id)->get();

        // add to transactio data
        $data['user_id'] = Auth::user()->id;
        $data['total_price'] = $carts->sum('obat.harga');

        // create transaction
        $transaction = Transaction::create($data);

        // create transaction obat
        foreach ($carts as $cart) {
            $items[] = TransactionObat::create([
                'transactions_id' => $transaction->id,
                'users_id' => Auth::user()->id,
                'obat_id' => $cart->obat_id
            ]);
        }

        // delete after transaction
        Cart::where('user_id', Auth::user()->id)->delete();

        // konfigurasi midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // setup variabel midtrans
        $midtrans = [
            'transaction_details' => [
                'order_id' => 'YS-' . $transaction->id,
                'gross_amount' => (int) $transaction->total_price
            ],
            'customer_details' => [
                'first_name' => $transaction->name,
                'email' => $transaction->email
            ]
        ];

        // payment proses
        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            $transaction->payment_url = $paymentUrl;
            $transaction->save();

            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function callback(Request $request)
    {
        $serverKey = config('services.midtrans.serverKey');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $transaction = Transaction::findOrFail($request->order_id);
                $transaction->update(['status' => 'SUCCESS']);
            }
        }
    }

    public function success()
    {
        return view('landingpage.successPay');
    }
}
