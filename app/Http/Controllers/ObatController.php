<?php

namespace App\Http\Controllers;

use App\Exports\ExportObat;
use App\Models\Obat;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();
        return view('admin.obat.index')->with('obat', $obat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_obat' => 'required',
                'stok' => 'numeric',
                'harga' => 'numeric',
                'deskripsi' => 'required',
                'foto' => ['required', 'image']
            ]
        );

        $data = $request->all();

        if ($request->has('foto')) {
            $foto = $request->file('foto')->store('obat/img', 'public');
            $data['foto'] = $foto;
        } else {
            unset($data['foto']);
        }

        Obat::create($data);
        return redirect()->route('obat.index')->with('success', 'Berhasil menambah data obat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat $obat)
    {
        return view('admin.obat.edit')->with('obat', $obat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_obat' => 'required',
                'stok' => 'required',
            ]
        );

        $data = [
            'nama_obat' => $request->nama_obat,
            'stok' => $request->stok,
        ];

        Obat::where('id', $id)->update($data);
        return redirect()->route('obat.index')->with('toast_success', 'Berhasil update data dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Obat::where('id', $id)->delete();
        return redirect()->route('obat.index')->with('success', 'Berhasil hapus data');
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new ExportObat, 'obat.xlsx');
    }
}
