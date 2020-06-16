@extends('layouts.app')

@section('content')
<div class="container single-post">
    <div class="row main-post row-cols-sm-1">
        <div class="col-md-8 col-sm-12">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Fashion Statement</a></li>
                        <li class="breadcrumb-item"><a href="#">Mens</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shoes</li>
                    </ol>
                </nav>
            </div>

            <div class="border-success">
                <h2 class="post-price text-danger">&#8369; 5000 </h2>
                <h3 class="post-title"><strong>Vans Sk8-Hi MTE Shoes</strong></h3>
                <p class="post-card-location mb-0"><i class="mdi mdi-google-maps"></i><span> Baguio City</span></p>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <div id="post-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                    alt="Vans" class="">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                    alt="..." class="">
                            </div>
                            <div class="carousel-item">
                                <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                    alt="..." class="">
                            </div>
                        </div>
                        <a class="carousel-control carousel-control-prev" href="#post-carousel" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control carousel-control-next" href="#post-carousel" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                        <!-- Indicators -->
                        <ul class="carousel-indicators list-inline mx-auto px-2">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-target="#post-carousel" data-slide-to="0">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                        alt="Vans" class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item ">
                                <a id="carousel-selector-1" class="selected" data-target="#post-carousel" data-slide-to="1">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                        class="img-fluid">
                                </a>
                            </li>
                            <li class="list-inline-item ">
                                <a id="carousel-selector-2" class="selected" data-target="#post-carousel" data-slide-to="2">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"
                                        class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-2 post-description">
                <div class="col">
                    <div class="card w-100 shadow-sm">
                        <h5 class="card-header">Description</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text p-1">
                                The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the
                                elements whilst still looking cool. <br>

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Condimentum id venenatis a condimentum. <br>

                                Adipiscing enim eu turpis egestas pretium aenean. <br>

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Condimentum id venenatis a condimentum. <br>

                                Adipiscing enim eu turpis egestas pretium aenean.
                            </p>

                            <div class="card-footer text-muted bg-transparent pb-0">
                                <div class="row">
                                    <div class="col px-0">
                                        <p>POST ID: <strong class="post-id"> 3G8733D112</strong></p>
                                    </div>
                                    <div class="col px-0 text-right">
                                        <p class="py-0 my-0">Posted by: <a href="#"><strong
                                                    class="posted-by">shoesph</strong></a></p>
                                        <p class="py-0 my-0">Posted <span class="time-posted"> January 10, 2020 </span></p>
                                    </div>
                                </div>
                                <div class="row border-top">
                                    <div class="col pt-3 px-0 share-post"> Share on:
                                        <span class="twitter-share p-2" data-js="twitter-share">
                                            <i class="mdi mdi-twitter" aria-hidden="true"></i> Twitter
                                        </span>
                                        <span class="facebook-share p-2" data-js="facebook-share">
                                            <i class="mdi mdi-facebook" aria-hidden="true"></i> Facebook
                                        </span>
                                    </div>
                                    <div class="col pt-3 px-0 report-post text-right">
                                        <button type="button" class="btn btn-outline-danger"><i
                                                class="mdi mdi-exclamation-thick"></i> Report</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="row seller-profile">
                <div class="col">
                    <div class="card shadow-sm text-center">
                        <div class="card-header border-0 bg-white">
                            <div class="row d-flex justify-content-around">
                                <div class="col-auto">
                                    {{-- <img class="rounded-circle" src="https://i.imgur.com/nUNhspp.jpg" width="133" height="133"> --}}
                                    <img class="rounded-circle" src="{{ asset('images/test.jpg') }}" width="133" height="133">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="font-weight-bold text-center seller-name">shoesph</h5>
                                <p class="seller-membership text-muted">Member Since <span>December 2019</span></p>
                                <div style="text-align:center">
                                    <div class="row">
                                        <div class="star-rating col text-right">
                                            <i class="mdi mdi-star checked" data-rating="1"></i>
                                            <i class="mdi mdi-star checked" data-rating="2"></i>
                                            <i class="mdi mdi-star checked" data-rating="3"></i>
                                            <i class="mdi mdi-star checked" data-rating="4"></i>
                                            <i class="mdi mdi-star checked" data-rating="5"></i>
                                            <span class="text-muted text-black-50">15</span>
                                        </div>
                                        <div class="col text-left">
                                            <a href="#" class="font-weight-bolder">Seller Profile</a>
                                        </div>
                                    </div>

                                    <div class="card-footer border-0 mb-2 mt-0 bg-white">
                                        <div class="btn-group btn-group-lg seller-btn-group" role="group"
                                            aria-label="seller-offer">
                                            <button type="button"
                                                class="btn btn-light seller-chat border font-weight-bolder">Chat</button>
                                            <button type="button" class="btn btn-danger seller-make-offer">Make
                                                Offer</button>
                                            <button type="button" class="btn seller-show-number" data-toggle="popover" title="Seller Contact Number" data-placement="bottom" data-content="09091231233">Show Number</button>
                                        </div>

                                        {{-- <button type="button" class="btn btn-light seller-chat border font-weight-bolder">Chat</button>
                                            <button type="button" class="btn btn-danger seller-make-offer">Make Offer</button>
                                            <button type="button" class="btn seller-show-number">Show Number</button>--}}
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="row Contact-seller mt-4">
                        <div class="col">
                            <div class="card w-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Contact Seller</h5>
                                    <div class="form-box">
                                        <form action="#" method="post">
                                            <fieldset class="form-group form-label-group">
                                                <input class="form-control form-control-lg pt-2" id="name" type="text"
                                                    name="Name">
                                                <label class="text-left" for="name">Name <span
                                                        class="text-muted">(Optional)</span></label>
                                            </fieldset>
                                            <fieldset class="form-group form-label-group">
                                                <input class="form-control form-control-lg" id="email" type="email"
                                                    name="Email">
                                                <label class="text-left" for="email">Email <span
                                                        class="text-muted">(Optional)</span></label>
                                            </fieldset>
                                            <fieldset class="form-group form-label-group">
                                                <input class="form-control form-control-lg pt-2" id="number"
                                                    type="number" name="number" required>
                                                <label class="text-left" for="number">Phone</label>
                                            </fieldset>
                                            <fieldset class="form-group form-label-group">
                                                <textarea class="form-control form-control-lg pt-4" id="message"
                                                    name="Message"></textarea>
                                                <label class="text-left" for="message">Message</label>
                                            </fieldset>
                                            <div class="form-group m-0 text-right">
                                                <input class="btn send-message" type="submit" value="Send Message">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row safety-tips mt-4">
                        <div class="col">
                            <div class="card w-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Safety Tips</h5>
                                    <div class="form-box">
                                        <ul class="list-group list">
                                            <li class="list-group-item"><i class="mdi mdi-shield-check-outline"></i>
                                                Meet the seller face-to-face</li>
                                            <li class="list-group-item"><i class="mdi mdi-shield-check-outline"></i>
                                                Meet a safe public space</li>
                                            <li class="list-group-item"><i class="mdi mdi-shield-check-outline"></i>
                                                Check the item/s before buying</li>
                                            <li class="list-group-item"><i class="mdi mdi-shield-check-outline"></i>
                                                Pay only after collecting the item/s</li>
                                            <li class="list-group-item"><i class="mdi mdi-shield-check-outline"></i>
                                                Vestibulum at eros</li>
                                            <li class="list-group-item"><i class="mdi mdi-shield-check-outline"></i>
                                                Cras justo odio</li>
                                            <li class="list-group-item"><i class="mdi mdi-shield-check-outline"></i>
                                                Dapibus ac facilisis in</li>
                                            <li class="list-group-item"><i class="mdi mdi-shield-check-outline"></i>
                                                Morbi leo risus</li>
                                            <li class="list-group-item"><i class="mdi mdi-shield-check-outline"></i>
                                                Porta ac consectetur ac</li>
                                            <li class="list-group-item"><i class="mdi mdi-shield-check-outline"></i>
                                                Vestibulum at eros</li>
                                        </ul>
                                        <div class="text-right">
                                            <button class="btn btn-outline-secondary next-tips mx-auto mt-2">Show More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="related-post">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm">
                        <h3><span class="bd-content-title">Related Posts</span></h3>
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
                                            <small class="text-muted"><p class="mb-1 posted-ago"><i class="mdi mdi-chevron-double-up text-info"></i> Spotlight </p></small>
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
                        <button type="button" class="btn btn-outline-danger mx-auto load-more-related">Load More</button>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</div>
        @endsection
