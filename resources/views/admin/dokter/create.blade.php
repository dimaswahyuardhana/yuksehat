@extends('admin.layout')
@section('content')
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Input Data Dokter</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dokter.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Dokter"
                                    value="{{ old('nama') }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Spesialis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keahlian" placeholder="Masukkan Spesialis"
                                    value="{{ old('keahlian') }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nomor Telephone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_telp"
                                    placeholder="Masukkan Nomor Telephone" value="{{ old('no_telp') }}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Foto</label>
                            <div class="col-sm-10">
                                <input name="image" type="file" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary float-right">Add Dokter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
