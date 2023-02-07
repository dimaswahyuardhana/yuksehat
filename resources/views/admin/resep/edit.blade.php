@extends('admin.layout')
@section('content')
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Resep Obat</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin-resep.update', $resep->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Keterangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keterangan"
                                    placeholder="Masukkan Keterangan" value="{{ $resep->keterangan }}" />
                                @error('keterangan')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Obat</label>
                            <div class="col-sm-10">
                                <select name="obat_id" id="" class="form-control">
                                    <option value="{{ $resep->obat->id }}" selected>{{ $resep->obat->nama_obat }}</option>
                                    @foreach ($obat as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_obat }}</option>
                                    @endforeach
                                </select>
                                @error('obat_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Dokter</label>
                            <div class="col-sm-10">
                                <select name="dokter_id" id="" class="form-control">
                                    <option value="{{ $resep->dokter->id }}" selected>{{ $resep->dokter->nama }}</option>
                                    @foreach ($dokters as $dokter)
                                        <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                                    @endforeach
                                </select>
                                @error('dokter_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
                            <div class="col-sm-10">
                                <select name="status" id="" class="form-control">
                                    <option selected>{{ $resep->status }}</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Ditebus">Ditebus</option>
                                </select>
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin-resep.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary float-right">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
