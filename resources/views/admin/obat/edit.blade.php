@extends('admin.layout')
@section('content')
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Data Obat : <b>{{ $obat->nama_obat }}</b></h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('obat.update', ['obat' => $obat->id]) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_obat" placeholder="Masukkan Nama obat"
                                    value="{{ $obat->nama_obat }}" />
                                @error('nama_obat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Stok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="stok" value="{{ $obat->stok }}"
                                    placeholder="Masukkan Spesialis" />
                                @error('stok')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('obat.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary float-right">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
