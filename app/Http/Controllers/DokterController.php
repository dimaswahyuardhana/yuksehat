<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = new Dokter;
        $dokter = $query->paginate(3);

        return view('admin.dokter.index')->with('dokter', $dokter);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dokter.create');
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
                'nama' => 'required',
                'keahlian' => 'required',
                'no_telp' => 'required|numeric',
                'image' => ['nullable', 'image'],
            ]
        );

        $input = $request->all();

        if($request->has('image')){
            $image = $request->file('image')->store('dokter/img', 'public');
            $input['image'] = $image;
        }else{
            unset($input['image']);
        }

        Dokter::create($input);
        return redirect()->route('dokter.index')->with('success', 'Berhasil menambah data dokter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        return view('admin.dokter.show')->with('dokter', $dokter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokter $dokter)
    {
        return view('admin.dokter.edit')->with('dokter', $dokter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokter $dokter)
    {
        $request->validate(
            [
                'nama' => 'required',
                'keahlian' => 'required',
                'no_telp' => 'required|numeric',
                'image' => ['nullable', 'image'],
            ]
        );

        $input = $request->all();
        if($request->has('image')){ 
            if($dokter->image != null && Storage::disk('public')->exists($dokter->image)){
            Storage::disk('public')->delete($dokter->image);
        }
            $image = $request->file('image')->store('dokter/img', 'public');
            $input['image'] = $image;
        }else{
            $input['image'] = $dokter->image;
        }

        $dokter->update($input);

        return redirect(route('dokter.index'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dokter::where('id', $id)->delete();
        return redirect()->route('dokter.index')->with('success', 'Berhasil hapus data');
    }
}
