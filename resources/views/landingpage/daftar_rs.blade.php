@extends('landingpage.index')
@section('content')
    <section class="section service-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Daftar Rumah Sakit</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Anda dapat melakukan pendafataran Rumah Sakit secara mandiri di seluruh Rumah Sakit yang tersebar
                            di Indonesia</p>
                        <form class="form-inline d-flex justify-content-center">
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="text" class="form-control" placeholder="Masukkan Nama RS">
                            </div>
                            <button type="submit" class="btn btn-danger mb-2">Cari Rumah Sakit</button>
                        </form>
                    </div>

                </div>
            </div>

            <div class="row">
                @foreach ($data as $item)
                    <div class="col-lg-3 col-sm-6 ngezoom">
                        <a href="{{ route('detail-rs', $item->id) }}">
                            <div class="department-block mb-4 shadow bg-white rounded p-3">
                                <img src="images/service/adammalik.jpg" alt="" class="img-fluid w-100">
                                <div class="content">
                                    <h5 class="mt-4 mb-2 title-color">{{ $item->nama }}</h5>
                                    <p class="mb-4">{{ $item->wilayah }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{ $data->links() }}
            </div>
        </div>
    </section>
@endsection
