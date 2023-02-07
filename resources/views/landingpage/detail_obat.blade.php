@extends('landingpage.index')
@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $datas[0]->foto) }}" width="400px" class="rounded mx-auto d-block"
                    alt="...">
            </div>
            <div class="col-md-6">
                <h2>{{ $datas[0]->nama_obat }}</h2>
                <p class="mt-3">{{ $datas[0]->deskripsi }}</p>
                <h3>RP. {{ number_format($datas[0]->harga) }}</h3>
                <form action="{{ route('cart-add', $datas[0]->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">PESAN</button>
                </form>
            </div>
        </div>
    </div>
@endsection
