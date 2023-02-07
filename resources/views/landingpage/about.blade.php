@extends('landingpage.index')
@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">Tentang Kami</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<img src="{{url('images/logobaru.png')}}" alt="" class="img-fluid w-100">
			</div>
			<style>
				.p{
					text-align:justify;
				}
			</style>
			<div class="col-lg-8">
				<p class="p">Yuk Sehat merupakan website informasi kesehatan yang memiliki fungsi untuk memberikan informasi tentang kesehatan,
					dan memiliki banyak fitur seperti customer dapat bertanya kepada dokter sehingga
					customer dapat mengetahui informasi mengenai obat-obatan dan dapat juga membeli obat.
					Selain itu fitur unggulan dari website Yuk Sehat adalah customer dapat melakukan pendaftaran RS di seluruh Indonesia sehingga lebih mudah dan praktis</p>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row align-items-center">

		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="{{url('images/about/chat.jpg')}}" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Chat Dokter</h4>
						<p>Hubungi Dokter kapan dan dimana saja jika Anda mengalami gangguan masalah kesehatan.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="{{url('images/about/rs.jpg')}}" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Check-In Rumah Sakit</h4>
						<p>Lakukan reservasi secara online di Rumah Sakit terdekat di kota Anda.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="{{url('images/about/kesehatan.jpg')}}" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Informasi Kesehatan</h4>
						<p>Berbagai informasi kesehatan yang dapat meningkatkan wawasan akan kesehatan.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="about-block-item">
						<img src="{{url('images/about/obat.jpg')}}" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Informasi Obat-Obatan</h4>
						<p>Berbagai informasi obat-obatan yang dapat meningkatkan wawasan akan kesehatan.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<h2 class="title-color">Fitur Yuk Sehat</h2>
			<div class="divider mt-4 mb-5 mb-lg-0"></div>
		</div>
	</div>
</div>
@endsection
