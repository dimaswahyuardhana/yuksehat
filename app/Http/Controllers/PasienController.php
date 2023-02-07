<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Pasien::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <a href="' . route('admin-pasien.edit', $item->id) . '" class="btn btn-warning btn-sm">Edit</a>
                    <form action="' . route('admin-pasien.destroy', $item->id) . '" class="d-inline" method="POST">
                         <button class="btn btn-danger btn-sm">
                            hapus
                         </button>
                        ' . method_field('delete') . csrf_field() . '
                    </form>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('admin.pasien.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pasien.create');
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
            'nama' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required'
        ]);

        $data = $request->all();
        Pasien::create($data);
        return redirect()->route('admin-pasien.index')->with('success', 'Berhasil menambah data pasien');
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
        $data = Pasien::findOrFail($id);
        return view('admin.pasien.edit', compact('data'));
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
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required'
        ]);

        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
        ];
        Pasien::where('id', $id)->update($data);
        return redirect()->route('admin-pasien.index')->with('success', 'Berhasil update data pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
