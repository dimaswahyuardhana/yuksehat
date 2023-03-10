<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kamar::all();
        return view('admin.kamar.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kamar' => 'required',
            'fasilitas' => 'required'
        ]);

        $data = $request->all();
        Kamar::create($data);
        return redirect()->route('admin-kamar.index')->with('success', 'Berhasil menambah data kamar');
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
    public function edit($id)
    {
        $datas = Kamar::findOrFail($id);
        return view('admin.kamar.edit', compact('datas'));
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
                'nama_kamar' => 'required',
                'fasilitas' => 'required',
            ]
        );

        $data = [
            'nama_kamar' => $request->nama_kamar,
            'fasilitas' => $request->fasilitas,
        ];
        Kamar::where('id', $id)->update($data);
        return redirect()->route('admin-kamar.index')->with('toast_success', 'Berhasil update data kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kamar::where('id', $id)->delete();
        return redirect()->route('admin-kamar.index')->with('success', 'Berhasil hapus data');
    }
}
