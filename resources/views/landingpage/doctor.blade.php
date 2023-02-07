@extends('landingpage.index')
@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">All Doctors</span>
                        <h1 class="text-capitalize mb-5 text-lg">Specalized doctors</h1>

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
                        <h2>Doctors</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>
                            Daftar Dokter Terpercaya Di Indonesia Sesuai Dengan Spesialis
                        </p>
                    </div>
                </div>
            </div>

            <div class="row shuffle-wrapper portfolio-gallery">
                @foreach ($dokter as $item)
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                        data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    @if ($item->image != null)
                                        <img src="{{ asset('storage/' . $item->image) }}"
                                            alt="Foto_Dokter-.{{ $item->id }}" class="img-fluid w-70">
                                    @else
                                        <img src="" alt="doctor-image" class="img-fluid w-100">
                                    @endif

                                </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-2"><a href="#">{{ $item->nama }}</a></h4>
                                <h5>Spesialis : {{ $item->keahlian }}</h5>
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
                        <h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have
                                the healthy</span></h2>
                        <a href="appoinment.html" class="btn btn-main-2 btn-round-full">Get appoinment<i
                                class="icofont-simple-right  ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
