@extends('landingpage.index')
@section('content')
    <div class="container mt-5 mb-5">
        <h3 class="text-center">Sukses Melalukan Check In Silahkan Ke Respsionis
            <br>
            Untuk Melakukan Konfirmasi Dengan Menunjukkan kode <b>{{ $kode[0]->kode }}</b> atau Dengan Meny
        </h3>

        <a href="{{ url('/') }}" class="text-center">
            <h4 class="text-primary">Kembali Ke Beranda</h4>
        </a>
    </div>
@endsection
