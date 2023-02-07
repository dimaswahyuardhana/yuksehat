@extends('landingpage.index')
@section('content')
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">Solusi sehat semua ada di YUK SEHAT</span>
                        <h1 class="mb-3 mt-3">ATASI RIBET UNTUK MENJADI SEHAT</h1>
                        <p class="mb-4 pr-5">Kumpulan informasi kesehatan terlengkap dan terpercaya, terdapat fitur pesan
                            obat, chat dokter, dan check-in RS dengan mudah dan tanpa ribetttt</p>
                        <!-- <div class="btn-container ">
                  <a href="#" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i class="icofont-simple-right ml-2  "></i></a>
                 </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-doctor"></i>
                            </div>
                            <span>24 Jam Pelayanan</span>
                            <h4 class="mb-3">Chat Dokter</h4>
                            <p class="mb-4">Konsultasikan permasalahan kesehatan anda dengan chat 24 jam kepada dokter
                                terbaik dari YUK SEHAT</p>
                            <a class="btn btn-danger" href="{{ url('/doctor') }}">Daftar Dokter</a>

                        </div>
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Layanan Check-In Rumah Sakit</span>
                            <h4 class="mb-3">Check-In Rumah Sakit</h4>
                            <p class="mb-4">Daftarkan diri anda ke rumah sakit dengan layanan Check-In Rumah Sakit dari
                                YUK SEHAT</p>
                            <a class="btn btn-danger" href="{{ route('daftar-rs') }}">Check-In Rumah Sakit</a>
                        </div>
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-capsule"></i>
                            </div>
                            <span>Layanan Pesan Obat</span>
                            <h4 class="mb-3">Pesan Obat</h4>
                            <p>Kini anda lebih mudah pesan obat yang anda inginkan, tentunya terpercaya dan aman ya hanya di
                                YUK SEHAT</p>
                            <a class="btn btn-danger" href="{{ url('/obat') }}">Pesan Obat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
