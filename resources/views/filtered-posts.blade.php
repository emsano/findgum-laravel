@extends('layouts.app')

@section('content')
<div class="container-fluid filtered-posts">
    <div class="container mb-2 px-0">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Fashion Statement</a></li>
                        <li class="breadcrumb-item"><a href="#">Mens</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shoes</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3><span class="bd-content-title">Buy Mens Shoes Online</span></h3>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 mx-auto">
        <div class="row px-sm-auto">
            <div class="col-md-3 col-sm-12">
                <div class="card shadow mb-2">
                    <div class="card-header font-weight-bolder border-0">
                        <button class="btn btn-light w-100" type="button" data-toggle="collapse" data-target="#collapse-filter" aria-expanded="false">
                            Filters <i class="mdi mdi-arrow-collapse"></i>
                        </button>
                    </div>
                    <div class="card-body collapse show" id="collapse-filter">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="location-search" name="location-search" placeholder="Location">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                        <hr/>
                        <p class="font-weight-bolder">Price Range</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-0 bg-white pl-0">Min</span>
                                <span class="input-group-text">&#8369;</span>
                            </div>
                            <input type="number" class="form-control" placeholder="" id="from-range" name="from-range">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-0 bg-white pl-0">Max</span>
                                <span class="input-group-text">&#8369;</span>
                            </div>
                            <input type="number" class="form-control" placeholder="" id="to-range" name="to-range">
                        </div>
                        <button type="button" class="btn btn-primary">Apply</button>
                        <hr/>
                        <p class="font-weight-bolder">Condition</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="item-condition-new" value="new">
                            <label class="form-check-label" for="item-condition-new">New</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="item-condition-used" value="used">
                            <label class="form-check-label" for="item-condition-used">Used</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 com-sm-12">
                @for ($a = 0 ; $a < 5; $a++ )
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                    @for ($b = 0 ; $b < 4 ; $b++ )
                    <div class="col mb-4 post-card px-md-2 px-sm-2">
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
                                <h5 class="card-title post-title"><a href="{{ route('single-post', 20) }}" class="card-link text-danger like">Vans Sk8-Hi MTE Shoes</a></h5>
                                <p class="card-text post-desc">
                                    The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements whilst still looking cool. </p>
                            </div>
                            <div class="card-footer bg-transparent border-success">
                                <p class="post-price mb-0">&#8369; 5000 </p>
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
        </div>
    </div>
</div>
@endsection
