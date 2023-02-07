<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResepResource;
use App\Models\resepObat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class apiResepController extends Controller
{
    public function index()
    {
        $result = resepObat::join('dokter', 'dokter.id', '=', 'resep_obat.dokter_id')
            ->join('obat', 'obat.id', '=', 'resep_obat.obat_id')
            ->join('pasien', 'pasien.id', '=', 'resep_obat.pasien_id')
            ->select('dokter.nama AS Nama Dokter', 'obat.nama_obat AS Nama Obat', 'resep_obat.keterangan', 'resep_obat.jumlah_obat', 'pasien.nama AS Nama Pasien', 'resep_obat.status')
            ->get();

        return new ResepResource(true, 'Data Resep Obat', $result);
    }

    public function getResep($id)
    {
        $result = resepObat::join('dokter', 'dokter.id', '=', 'resep_obat.dokter_id')
            ->join('obat', 'obat.id', '=', 'resep_obat.obat_id')
            ->join('pasien', 'pasien.id', '=', 'resep_obat.pasien_id')
            ->select('dokter.nama AS Nama Dokter', 'obat.nama_obat AS Nama Obat', 'resep_obat.keterangan', 'resep_obat.jumlah_obat', 'pasien.nama AS Nama Pasien', 'resep_obat.status')
            ->where('resep_obat.id', '=', $id)
            ->first();

        if ($result) {
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data Resep',
                    'data' => $result
                ],
                200
            );
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan!',
                'data'    => ''
            ], 401);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'keterangan' => 'required',
            'obat_id' => 'required|integer',
            'dokter_id' => 'required|integer',
            'jumlah_obat' => 'required|integer',
            'pasien_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }

        $resep = resepObat::create([
            'keterangan' => $request->keterangan,
            'obat_id' => $request->obat_id,
            'dokter_id' => $request->dokter_id,
            'jumlah_obat' => $request->jumlah_obat,
            'pasien_id' => $request->pasien_id,
            'status' => $request->status
        ]);

        return new ResepResource(true, 'Data Berhasil Ditambah', $resep);
    }

    public function update(Request $request, resepObat $resepObat)
    {
        $validator = Validator::make($request->all(), [
            'keterangan' => 'required',
            'obat_id' => 'required|integer',
            'dokter_id' => 'required|integer',
            'jumlah_obat' => 'required|integer',
            'pasien_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }

        $resepObat->update([
            'keterangan' => $request->keterangan,
            'obat_id' => $request->obat_id,
            'dokter_id' => $request->dokter_id,
            'jumlah_obat' => $request->jumlah_obat,
            'pasien_id' => $request->pasien_id,
            'status' => $request->status
        ]);

        return new ResepResource(true, 'Data Berhasil Diupdate', $resepObat);
    }

    public function delete(resepObat $resepObat)
    {
        $resepObat->delete();
        return new ResepResource(true, 'Data Berhasil Dihapus', $resepObat);
    }
}
