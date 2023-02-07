<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        return view('landingpage.obat', compact('obats'));
    }

    public function detail_obat($id)
    {
        $datas = Obat::where('id', $id)->get();
        return view('landingpage.detail_obat', compact('datas'));
    }

    public function cartAdd(Request $request, $id)
    {
        Cart::create([
            'user_id' => Auth::user()->id,
            'obat_id' => $id
        ]);

        return redirect('cart');
    }
}
