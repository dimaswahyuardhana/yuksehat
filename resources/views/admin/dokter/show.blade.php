@extends('admin.layout')
@section('content')
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Detail Dokter</h5>
                </div>
                <div class="card-body">
                        @if ($dokter->image != null)
                        <center><img src="{{asset('storage/'. $dokter->image)}}" width="15%" alt="Foto_Dokter-.{{$dokter->id}}"></center><br>                              
                        @else
                        <p>Tidak ada Foto</p>
                        @endif
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama"
                                value="{{$dokter->nama}}"  disabled/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Spesialis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keahlian"
                                value="{{$dokter->keahlian}}" disabled/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nomor Telephone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_telp"
                                value="{{$dokter->no_telp}}" disabled/>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('dokter.index')}}" class="btn btn-secondary">Back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
