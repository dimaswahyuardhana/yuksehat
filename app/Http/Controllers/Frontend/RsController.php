<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Kamar;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\CheckIn;
use App\Models\RumahSakit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RsController extends Controller
{
    public function index()
    {
        $data = DB::table('rumah_sakit')->paginate(12);
        return view('landingpage.daftar_rs', compact('data'));
    }

    public function detail($id)
    {
        $data = RumahSakit::where('id', $id)->get();
        return view('landingpage.detail_rs', compact('data'));
    }

    public function checkIn($id)
    {
        $data = RumahSakit::where('id', $id)->get();
        $dokters = Dokter::all();
        $kamars = Kamar::all();
        return view('landingpage.checkIn', compact('data', 'dokters', 'kamars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required',
            'phone' => 'required',
            'tgl_lahir' => 'required',
            'tgl_checkIn' => 'required',
            'jam_checkIn' => 'required',
            'dokter_id' => 'required',
            'kamar_id' => 'required',
            'gender' => 'required',
            'alamat' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['rs_id'] = $request->rs_id;
        $data['kode'] = 'CH' . '-' . Str::random(10);

        $checkIn = CheckIn::create($data);
        Pasien::create([
            'nama' => $checkIn->fullName,
            'alamat' => $checkIn->alamat,
            'gender' => $checkIn->gender,
            'tgl_lahir' => $checkIn->tgl_lahir
        ]);

        $kode = CheckIn::where('user_id', Auth::user()->id)->get();
        return view('landingpage.success-checkIn', compact('kode'));
    }
}
