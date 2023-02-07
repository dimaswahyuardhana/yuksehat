@extends('admin.layout')
@section('content')
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Data Dokter : <b>{{$dokter->nama}}</b></h5>
                </div>
                <div class="card-body">
                    <form action="{{route('dokter.update', ['dokter'=> $dokter->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Masukkan Nama Dokter" value="{{$dokter->nama}}"/>
                                @error('nama')
                                <small class="text-danger">{{$message}}</small>
                                 @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Spesialis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keahlian" value="{{$dokter->keahlian}}"
                                    placeholder="Masukkan Spesialis" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nomor Telephone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_telp" value="{{$dokter->no_telp}}"
                                    placeholder="Masukkan Nomor Telephone" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Foto</label>
                            <div class="col-sm-10">
                                <input name="image" type="file" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('dokter.index')}}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary float-right">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
