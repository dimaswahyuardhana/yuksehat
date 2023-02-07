@extends('landingpage.index')
@section('content')
    <section class="section appoinment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="appoinment-content">
                        <img src="{{ url('images/about/cekin.png') }}" alt="" class="img-fluid">
                        <div class="emergency">
                            <h2 class="text-lg">{{ $data[0]->nama }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 ">
                    <div class="appoinment-wrap mt-5 mt-lg-0">
                        <h2 class="mb-2 title-color">Check-In Rumah Sakit</h2>
                        <p class="mb-4">Silahkan Lengkapi Data Diri Anda Agar Permintaan Anda Dapat Diproses</p>
                        <form class="appoinment-form" method="post" action="{{ route('checkIn') }}">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="rs_id" value="{{ $data[0]->id }}">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Rumah Sakit</label>
                                        <input name="hospital" id="hospital" type="text" class="form-control"
                                            value="{{ $data[0]->nama }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Dokter</label>
                                        <select class="form-control" id="dokter" name="dokter_id">
                                            <option>-- Pilih Dokter --</option>
                                            @foreach ($dokters as $dokter)
                                                <option value="{{ $dokter->id }}">{{ $dokter->nama }} - Spesialis
                                                    {{ $dokter->keahlian }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Kamar</label>
                                        <select class="form-control" id="kamar" name="kamar_id">
                                            <option>-- Pilih Kamar --</option>
                                            @foreach ($kamars as $kamar)
                                                <option value="{{ $kamar->id }}">{{ $kamar->nama_kamar }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input name="fullName" id="name" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nomor HP/WA</label>
                                        <input name="phone" id="phone" type="Number" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="gender" id="" class="form-control">
                                            <option disabled selected>-- Pilih Gender --</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="tgl_lahir" id="tgl_lahir" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" cols="30"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Check-In di RS</label>
                                        <input name="tgl_checkIn" id="tgl_checkin" type="date" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Waktu Check-In di RS</label>
                                        <input name="jam_checkIn" id="time" type="time" class="form-control"
                                            placeholder="Waktu Check-In di RS">
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-md btn-danger btn-round-full float-right" type="submit">Check-In<i
                                    class="icofont-simple-right ml-2  "></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
