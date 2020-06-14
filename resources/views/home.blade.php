@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<h3><span class="bd-content-title">Latest Finds</span></h3>
        {{-- <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
						</div>
					@endif

					Test Page
				</div>
			</div>
		</div> --}}
	</div>
	@for ($a = 0 ; $a < 3; $a++ )
	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
		@for ($b = 0 ; $b < 4 ; $b++ )
		<div class="col mb-4">
			<div class="card">
				<div class="card-header px-4">
					<a href="#" class="btn card-profile-image">
						<div class="row">
							<div class="col>">
								<img src="{{ asset('images/test.jpg') }}">
							</div>
							<div class="col posted-by">
								Shoesph
								<small class="text-muted"><p>1 hour ago</p></small>
							</div>
						</div>
					</a>
				  </div>
				<img class="card-img product-card-img"
					src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
				<div class="card-body">
					<h4 class="card-title"><a href="#" class="card-link text-danger like">Vans Sk8-Hi MTE Shoes</a></h4>
					<p class="card-text">
						The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements
						whilst still looking cool. </p>
				</div>
				<div class="card-footer bg-transparent border-success">
					<p class="product-price">&#8369;5000 </p>
					<p class="product-card-location"><i class="mdi mdi-google-maps"></i><span> Baguio City</span></p>
				</div>
			</div>
		</div>
		@endfor
		
	</div>
	@endfor
	
</div>
@endsection
