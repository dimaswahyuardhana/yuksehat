<?php

namespace App\Http\Controllers;

use App\Exports\ExportUser;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = User::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <a href="' . route('admin-user.edit', $item->id) . '" class="btn btn-warning btn-sm">Edit</a>
                    <form action="' . route('admin-user.destroy', $item->id) . '" class="d-inline" method="POST">
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
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = User::findOrFail($id);
        return view('admin.user.edit', compact('data'));
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
                'name' => 'required',
                'jenis_kelamin' => 'required',
                'usia' => 'required',
                'tgl_lahir' => 'required',
                'alamat' => 'required'
            ]
        );

        $data = [
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'usia' => $request->usia,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'roles' => $request->roles
        ];

        User::where('id', $id)->update($data);
        return redirect()->route('admin-user.index')->with('toast_success', 'Berhasil update data user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin-user.index')->with('success', 'Berhasil hapus data');
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new ExportUser, 'data-user.xlsx');
    }
}
