@extends('admin.layout')
@section('content')
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Data Pasien : <b>{{ $data->nama }}</b></h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin-pasien.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Obat"
                                    value="{{ $data->nama }}" />
                                @error('nama')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="alamat"
                                    placeholder="Masukkan Jumlah alamat" value="{{ $data->alamat }}" />
                                @error('alamat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Gender</label>
                            <div class="col-sm-10">
                                <select name="gender" id="" class="form-control">
                                    <option value="L"{{ $data->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ $data->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl_lahir"
                                    placeholder="Masukkan Jumlah alamat" value="{{ $data->tgl_lahir }}" />
                                @error('tgl_lahir')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <a href="{{ route('admin-pasien.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
