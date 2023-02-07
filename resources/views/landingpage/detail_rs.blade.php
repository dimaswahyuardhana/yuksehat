@extends('landingpage.index')
@section('content')
    <section class="section doctor-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="doctor-img-block">
                        <img src="{{ asset('images/service/adammalik.jpg') }}" alt="" class="img-fluid w-100">
                    </div>
                </div>

                <div class="col-lg-8 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">{{ $data[0]->nama }}</h2>
                        <div class="divider my-4"></div>
                        <p>{{ $data[0]->nama }} merupakan Rumah Sakit Umum Kelas A yang terletak di {{ $data[0]->wilayah }}.
                        </p>
                        <a href="{{ route('form-check', $data[0]->id) }}"
                            class="btn btn-danger btn-round-full mt-3">Check-In Sekarang<i
                                class="icofont-simple-right ml-2  "></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="department-content mt-5">
                        <h3 class="text-md">Medecine and Health</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">Age forming covered you entered the examine. Blessing scarcely confined her
                            contempt wondered shy. Dashwoods contented sportsmen at up no convinced cordially affection.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum recusandae dolor autem laudantium,
                            quaerat vel dignissimos. Magnam sint suscipit omnis eaque unde eos aliquam distinctio, quisquam
                            iste, itaque possimus . Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet alias
                            modi eaque, ratione recusandae cupiditate dolorum repellendus iure eius rerum hic minus ipsa at,
                            corporis nesciunt tempore vero voluptas. Tempore.</p>


                        <h3 class="mt-5 mb-4">Fasilitas</h3>
                        <div class="divider my-4"></div>
                        <ul class="list-unstyled department-service">
                            <li><i class="icofont-check mr-2"></i>International Drug Database</li>
                            <li><i class="icofont-check mr-2"></i>Stretchers and Stretcher Accessories</li>
                            <li><i class="icofont-check mr-2"></i>Cushions and Mattresses</li>
                            <li><i class="icofont-check mr-2"></i>Cholesterol and lipid tests</li>
                            <li><i class="icofont-check mr-2"></i>Critical Care Medicine Specialists</li>
                            <li><i class="icofont-check mr-2"></i>Emergency Assistance</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-widget schedule-widget mt-5">
                        <h5 class="mb-4">Jam Operasional</h5>

                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Monday - Saturday</span>
                                <span>24 Hours</span>
                            </li>
                        </ul>

                        <div class="sidebar-contatct-info mt-4">
                            <p class="mb-0">Need Urgent Help?</p>
                            <h3>+23-4565-65768</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
