@extends('admin.layout')
@section('content')
    <br>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Input Data Kamar</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin-kamar.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_kamar"
                                    placeholder="Masukkan Nama Obat" value="{{ old('nama_kamar') }}" />
                                @error('nama_kamar')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name"
                                class="form-control">Fasilitas</label>
                            <div class="col-sm-10">
                                <textarea name="fasilitas" id="" cols="30"></textarea>
                                @error('fasilitas')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
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
@push('script')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('fasilitas');
    </script>
@endpush
