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

class CartController extends Controller
{
    public function cart()
    {
        $datas = Cart::with(['obat'])->where('user_id', Auth::user()->id)->get();
        return view('landingpage.cart', compact('datas'));
    }

    public function cartDelete($id)
    {
        $item = Cart::findOrFail($id);
        $item->delete();
        return redirect('cart');
    }
}
