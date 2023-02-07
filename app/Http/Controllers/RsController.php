<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Facades\DataTables;

class RsController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = RumahSakit::query();

            return DataTables::of($query)->make();
        }
        return view('admin.rumah-sakit.rumah-sakit');
    }
}
