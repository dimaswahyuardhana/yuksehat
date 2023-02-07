@extends('admin.layout')
@section('content')
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Data User : <b>{{ $data->name }}</b></h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin-user.update', $data->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama obat"
                                    value="{{ $data->name }}" />
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select name="jenis_kelamin" class="form-control">
                                    <option disabled selected>-- Pilih Gender --</option>
                                    <option value="L" {{ $data->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki
                                    </option>
                                    <option value="P"{{ $data->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Usia</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="usia" value="{{ $data->usia }}" />
                                @error('usia')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl_lahir"
                                    value="{{ $data->tgl_lahir }}" />
                                @error('tgl_lahir')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="alamat" cols="30" class="form-control">Alamat</textarea>
                                @error('alamat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Roles</label>
                            <div class="col-sm-10">
                                <select name="roles" class="form-control">
                                    <option disabled selected>-- Pilih Roles --</option>
                                    <option value="user" {{ $data->roles == 'user' ? 'selected' : '' }}>User
                                    </option>
                                    <option value="admin"{{ $data->roles == 'admin' ? 'selected' : '' }}>Admin
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin-user.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary float-right">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
