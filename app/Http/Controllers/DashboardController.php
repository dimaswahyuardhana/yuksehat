<?php

namespace App\Http\Controllers;

use App\Models\CheckIn;
use App\Models\Kamar;
use App\Models\Pasien;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $obats = DB::table('obat')->select('nama_obat', 'stok')->get();
        $dokters = DB::table('dokter')->selectRaw('keahlian, count(keahlian) as jumlah')
            ->groupBy('keahlian')->get();

        $transaksi = Transaction::count();
        $pasien = Pasien::count();
        $checkIn = CheckIn::count();
        $kamar = Kamar::count();

        return view('admin.index', compact('obats', 'dokters', 'transaksi', 'pasien', 'checkIn', 'kamar'));
    }
}
