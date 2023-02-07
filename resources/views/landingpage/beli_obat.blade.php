@extends('landingpage.index')
@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">Beli Obat</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-form-wrap section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section-title text-center">
          <h2 class="text-md mb-2">Apotek Terdekat</h2>
          <div class="divider mx-auto my-4"></div>
          <p class="mb-5">Laboriosam exercitationem molestias beatae eos pariatur, similique, excepturi mollitia sit
            perferendis maiores ratione aliquam?</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <form id="contact-form" class="contact__form " method="post" action="mail.php">
          <!-- form message -->
          <div class="row">
            <div class="col-12">
              <div class="alert alert-success contact__msg" style="display: none" role="alert">
                Your message was sent successfully.
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input name="name" id="name" type="text" class="form-control" placeholder="Nama">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <input name="email" id="email" type="email" class="form-control" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="obat" id="obat" type="text" class="form-control" placeholder="Nama Obat" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="jumlah" id="jumlah" type="text" class="form-control" placeholder="Jumlah Obat" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="phone" id="phone" type="text" class="form-control" placeholder="Nomor Telepon" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat" required>
              </div>
            </div>
          </div>

          <div class="form-group-2 mb-4">
            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message" required></textarea>
          </div>

          <div>
            <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Send Messege"></input>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
