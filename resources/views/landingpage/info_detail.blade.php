@extends('landingpage.index')
@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">Informasi Kesehatan</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
	<div class="col-lg-12 mb-5">
		<div class="single-blog-item">
			<img src="{{url('images/blog/blog-1.jpg')}}" alt="" class="img-fluid">

			<div class="blog-item-content mt-5">
				<div class="blog-item-meta mb-3">
					<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>2 Komentar</span>
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>
				</div>

				<h2 class="mb-4 text-md"><a href="blog-single.html">Healthy environment to care with modern equipment</a></h2>

				<p class="lead mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
					pariatur repudiandae!</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus, consectetur? Illum libero vel nihil
					nisi quae, voluptatem, sapiente necessitatibus distinctio voluptates, iusto qui. Laboriosam autem, nam
					voluptate in beatae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae iure officia nihil nemo,
					repudiandae itaque similique praesentium non aut nesciunt facere nulla, sequi sunt nam temporibus atque earum,
					ratione, labore.</p>

				<blockquote class="quote">
					A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.
				</blockquote>


				<p class="lead mb-4 font-weight-normal text-black">The same is true as we experience the emotional sensation of
					stress from our first instances of social rejection ridicule. We quickly learn to fear and thus automatically.
				</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat tenetur incidunt
					quisquam libero dolores laudantium. Nesciunt quis itaque quidem, voluptatem autem eos animi laborum iusto
					expedita sapiente.</p>

				<div class="mt-5 clearfix">
					<ul class="float-right list-inline">
						<li class="list-inline-item"> Share: </li>
						<li class="list-inline-item"><a href="#!"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="#!"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#!"><i class="icofont-pinterest"></i></a></li>
						<li class="list-inline-item"><a href="#!"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="comment-area mt-4 mb-5">
			<h4 class="mb-4">2 Komentar</h4>
			<ul class="comment-tree list-unstyled">
				<li class="mb-5">
					<div class="comment-area-box d-block d-sm-flex">
						<div class="comment-thumb">
							<img alt="" src="{{url('images/blog/testimonial1.jpg')}}" style="width: 70px">
						</div>

						<div class="block">
							<div class="comment-info">
								<h5 class="mb-1">John</h5>
								<span>United Kingdom</span>
								<span class="date-comm">| Posted April 7, 2019</span>
							</div>
							<div class="comment-content mt-3">
								<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company
									that provides consultants on an agency basis. </p>
							</div>
						</div>
					</div>
				</li>

				<li>
					<div class="comment-area-box d-block d-sm-flex">
						<div class="comment-thumb">
							<img alt="" src="{{url('images/blog/testimonial2.jpg')}}" style="width: 70px">
						</div>

						<div class="block">
							<div class="comment-info">
								<h5 class="mb-1">Philip W</h5>
								<span>United Kingdom</span>
								<span class="date-comm">| Posted June 7, 2019</span>
							</div>
							<div class="comment-content mt-3">
								<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company
									that provides consultants on an agency basis. </p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>


	<div class="col-lg-12">
		<form class="comment-form my-5" id="comment-form">
			<h4 class="mb-4">Tulis Komentar</h4>
			
			<textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5"
				placeholder="Tuliskan komentar Anda"></textarea>

			<input class="btn btn-main-2 btn-round-full" type="submit" name="submit-contact" id="submit_contact"
				value="Kirim Komentar">
		</form>
	</div>
</div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
	<div class="sidebar-widget search  mb-3 ">
		<h5>Cari Info</h5>
		<form action="#" class="search-form">
			<input type="text" class="form-control" placeholder="Masukkan informasi yang Anda inginkan">
			<i class="ti-search"></i>
		</form>
	</div>


	<div class="sidebar-widget latest-post mb-3">
		<h5>Informasi Populer</h5>

        <div class="py-2">
        	<span class="text-sm text-muted">03 Mar 2018</span>
            <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
        </div>

        <div class="py-2">
       		<span class="text-sm text-muted">03 Mar 2018</span>
            <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
        </div>

        <div class="py-2">
        	<span class="text-sm text-muted">03 Mar 2018</span>
            <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
        </div>
	</div>
</div>
      </div>
    </div>
  </div>
</section>
@endsection