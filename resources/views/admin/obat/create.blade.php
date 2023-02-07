@extends('admin.layout')
@section('content')
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Input Data Obat</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('obat.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_obat" placeholder="Masukkan Nama Obat"
                                    value="{{ old('nama_obat') }}" />
                                @error('nama_obat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Stok</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="stok" placeholder="Masukkan Jumlah Stok"
                                    value="{{ old('stok') }}" />
                                @error('stok')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Harga</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="harga"
                                    placeholder="Masukkan Jumlah harga" value="{{ old('harga') }}" />
                                @error('harga')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea name="deskripsi" id="" cols="30" class="form-control">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" placeholder="Upload Foto"
                                    accept="image/*"
                                    onchange="document.getElementById('foto').src = window.URL.createObjectURL(this.files[0])" />
                                @error('foto')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="mb-2"><img src="" id="foto" alt="" width="200">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
