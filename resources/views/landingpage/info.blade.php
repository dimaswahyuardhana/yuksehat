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
				<div class="col-lg-12 col-md-12 mb-5">
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="{{ url('images/blog/blog-1.jpg')}}" alt="" class="img-fluid ">
						</div>
			
						<div class="blog-item-content">
							<div class="blog-item-meta mb-3 mt-4">
								<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
								<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
							</div> 
			
							<h2 class="mt-3 mb-3"><a href="{{('/info_detail')}}">Choose quality service over cheap service  all type of things</a></h2>
			
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>
			
							<a href="{{('/info_detail')}}" target="_blank" class="btn btn-main btn-icon btn-round-full">Selengkapnya<i class="icofont-simple-right ml-2  "></i></a>
						</div>
					</div>
				</div>
			
				<div class="col-lg-12 col-md-12 mb-5">
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="{{ url('images/blog/blog-2.jpg')}}" alt="" class="img-fluid">
						</div>
			
						<div class="blog-item-content">
							<div class="blog-item-meta mb-3 mt-4">
								<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
								<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
							</div> 
			
							<h2 class="mt-3 mb-3"><a href="{{('/info_detail')}}">All test cost 25% in always in our laboratory</a></h2>
							
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>
			
							<a href="{{('/info_detail')}}" target="_blank" class="btn btn-main btn-icon btn-round-full">Selengkapnya<i class="icofont-simple-right ml-2  "></i></a>
						</div>
					</div>
				</div>
			
			
				<div class="col-lg-12 col-md-12 mb-5">
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="{{ url('images/blog/blog-4.jpg')}}" alt="" class="img-fluid">
						</div>
			
						<div class="blog-item-content">
							<div class="blog-item-meta mb-3 mt-4">
								<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
								<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
							</div> 
							<h2 class="mt-3 mb-3"><a href="{{('/info_detail')}}">Get Free consulation from our special surgeon and doctors</a></h2>
			
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>
			
							<a href="{{('/info_detail')}}" target="_blank" class="btn btn-main btn-icon btn-round-full">Selengkapnya<i class="icofont-simple-right ml-2  "></i></a>
						</div>
					</div>
				</div>
			
				<div class="col-lg-12 col-md-12">
					<nav class="pagination py-2 d-inline-block">
						<div class="nav-links">
							<span aria-current="page" class="page-numbers current">1</span>
							<a class="page-numbers" href="#!">2</a>
							<a class="page-numbers" href="#!">3</a>
							<a class="page-numbers" href="#!"><i class="icofont-thin-double-right"></i></a>
						</div>
					</nav>
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