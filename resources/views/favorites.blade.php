@extends('layouts.app')

@section('content')
<div class="container favorites" id="favorites">
    <div class="row">
        <div class="col">
            <h3><span class="bd-content-title">Favorites</span></h3>
        </div>
    </div>
    {{-- @for ($a = 0 ; $a < 2; $a++ ) --}}
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
			@for ($b = 0 ; $b < 3 ; $b++ )
			<div class="col mb-4 post-card">
				<div class="card shadow">
					<div class="card-header px-3 py-0">
						<a href="#" class="btn card-profile-image">
							<div class="row">
								<div class="col-">
									<img src="{{ asset('images/2p9VXAn.jpg') }}" class="rounded-circle">
								</div>
								<div class="col posted-by">
									HUSTLER PH Branch
									<small class="text-muted"><p class="mb-1 posted-ago">1 hour ago</p></small>
								</div>
							</div>
						</a>
					</div>
					<img class="card-img post-card-img"
						src="http://i.imgur.com/I5ABT2v.jpg" alt="etc">
					<div class="card-body">
						<h5 class="card-title post-title"><a href="{{ route('single-post') }}" class="card-link text-danger like">Vanguard Power</a></h5>
						<p class="card-text post-desc">
							If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
					</div>
					<div class="card-footer bg-transparent">
                        <p class="post-price mb-0">&#8369; 99999 </p><span class="post-condition float-right font-weight-bolder">New</span>
                        <p class="post-card-location mb-0"><i class="mdi mdi-google-maps"></i><span>Pampanga</span></p>
					</div>
				</div>
			</div>
			@endfor
		</div>
		{{-- @endfor --}}
</div>
@endsection
