@extends('landingpage.index')
@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Semua Obat</span>
                        <h1 class="text-capitalize mb-5 text-lg">Informasi Obat</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                                                                                    <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                                                                                    <li class="list-inline-item"><span class="text-white">/</span></li>
                                                                                    <li class="list-inline-item"><a href="#" class="text-white-50">All Doctors</a></li>
                                                                                  </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio -->
    <section class="section doctors">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Obat</h2>
                        <div class="divider mx-auto my-4"></div>
                    </div>
                </div>
            </div>

            <div class="row shuffle-wrapper portfolio-gallery">
                @foreach ($obats as $item)
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                        data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    @if ($item->foto != null)
                                        <img src="{{ asset('storage/' . $item->foto) }}"
                                            alt="Foto_Dokter-.{{ $item->id }}" class="img-fluid w-70">
                                    @else
                                        <img src="" alt="doctor-image" class="img-fluid w-100">
                                    @endif
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h3>{{ $item->nama_obat }}</h3>
                                <h5 class="mb-0"><a class="btn btn-danger"
                                        href="{{ url('/detail_obat', $item->id) }}">Detail</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /portfolio -->
    <section class="section cta-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cta-content">
                        <div class="divider mb-4"></div>
                        <h2 class="mb-5 text-lg">Kami merawat kalian dengan sepenuh hati <span class="title-color">yang
                                membuat anda cepat sembuh</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
