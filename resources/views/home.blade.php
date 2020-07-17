@extends('layouts.app')

@section('content')
<div class="container finds-list">
    <div class="ad-carousel d-none d-md-block d-lg-block  mb-2">
        <div id="carousel-banners" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-banners" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-banners" data-slide-to="1"></li>
				<li data-target="#carousel-banners" data-slide-to="2"></li>
			  </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://via.placeholder.com/1110x200?text=Example+Banner+Image+1" alt="First slide">
                </div>
                <div class="carousel-item">
					<img class="d-block w-100" src="https://via.placeholder.com/1110x200?text=Example+Banner+Image+2" alt="First slide">
                </div>
                <div class="carousel-item">
					<img class="d-block w-100" src="https://via.placeholder.com/1110x200?text=Example+Banner+Image+3" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-banners" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-banners" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

	<div class="latest-finds mb-2">
		<div class="row">
			<div class="col">
				<h3 class="mt-2"><span class="bd-content-title">Latest Finds</span></h3>
			</div>
		</div>
		@for ($a = 0 ; $a < 8; $a++ )
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
			@for ($b = 0 ; $b < 4 ; $b++ )
			<div class="col mb-4 post-card">
				<div class="card shadow">
					<div class="card-header px-3 py-0">
						<a href="#" class="btn card-profile-image">
							<div class="row">
								<div class="col-">
									<img src="{{ asset('images/test.jpg') }}" class="rounded-circle">
								</div>
								<div class="col posted-by">
									Shoesph
									<small class="text-muted"><p class="mb-1 posted-ago">1 hour ago</p></small>
								</div>
							</div>
						</a>
					</div>
					<img class="card-img post-card-img"
						src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
					<div class="card-body">
						<h5 class="card-title post-title"><a href="{{ route('single-post') }}" class="card-link text-danger like">Vans Sk8-Hi MTE Shoes</a></h5>
						<p class="card-text post-desc">
							The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements whilst still looking cool. </p>
					</div>
					<div class="card-footer bg-transparent border-success">
						<p class="post-price mb-0">&#8369; 5000 </p><span class="post-condition float-right font-weight-bolder">New</span>
						<p class="post-card-location mb-0"><i class="mdi mdi-google-maps"></i><span>Baguio City</span></p>
					</div>
				</div>
			</div>
			@endfor
		</div>
		@endfor
		<div class="row load-more-container">
			<div class="col text-center">
				<button type="button" class="btn btn-outline-danger mx-auto load-more-latest">Load More</button>
			</div>
		</div>
	</div>

	{{-- Commented Content for Future Use --}}
	{{-- <div class="fresh-finds">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm">
				<h3><span class="bd-content-title">Fresh Finds</span></h3>
			</div>
			<div class="col">
				<hr>
			</div>
		</div>
		@for ($a = 0 ; $a < 4; $a++ )
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
			@for ($b = 0 ; $b < 4 ; $b++ )
			<div class="col mb-4 post-card">
				<div class="card">
					<div class="card-header px-3 py-0">
						<a href="#" class="btn card-profile-image">
							<div class="row">
								<div class="col-">
									<img src="{{ asset('images/2p9VXAn.jpg') }}" class="rounded-circle">
								</div>
								<div class="col posted-by">
									HUSTLER PH Branch
									<small class="text-muted"><p class="mb-1 posted-ago">10 days ago</p></small>
								</div>
							</div>
						</a>
					</div>
					<img class="card-img post-card-img"
						src="http://i.imgur.com/I5ABT2v.jpg" alt="Vans">
					<div class="card-body">
						<h5 class="card-title post-title"><a href="#" class="card-link text-danger like">Vanguard Power</a></h5>
						<p class="card-text post-desc">
							If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
					</div>
					<div class="card-footer bg-transparent border-success">
						<p class="post-price mb-0">&#8369; 999999 </p>
						<p class="post-card-location mb-0"><i class="mdi mdi-google-maps"></i><span> Pampanga</span></p>
					</div>
				</div>
			</div>
			@endfor
		</div>
		@endfor

		<div class="row load-more-container">
			<div class="col text-center">
				<button type="button" class="btn btn-outline-danger mx-auto load-more-fresh">Load More</button>
			</div>
		</div>
	</div> --}}
</div>
@endsection
