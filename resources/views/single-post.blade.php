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
                <h2 class="post-price text-danger">&#8369; {{ number_format($data[0]->UnitPrice, 0) }} </h2>
                <h3 class="post-title"><strong>{{ $data[0]->Posting }}</strong></h3>
                <p class="post-card-location mb-0"><i class="mdi mdi-google-maps"></i><span> {{ $data[0]->City }}</span>
                <form action="#" method="" class="d-inline-flex">
                    <button class="btn float-right p-0 add-to-fav"><i class="mdi mdi-heart-outline"></i> Add to Favorites</button></p>
                </form>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <div id="post-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mx-auto" role="listbox">
                            @if (!$img->isEmpty())
                                @foreach ($img as $key=>$image)
                                    <div class="carousel-item @if($key==0) active @endif" data-interval="10000">
                                        <img src="{{ asset($image->ImageUrl) }}"
                                            alt="Product Photo" class="mx-auto d-block">
                                    </div>
                                @endforeach
                            @else
                                <div class="active" data-interval="10000">
                                    <img src="{{ asset($noImg) }}"
                                        alt="Product Photo" class="mx-auto d-block">
                                </div>
                            @endif
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
                            @if (!$img->isEmpty())
                                @foreach ($img as $key=>$image)
                                    <li class="list-inline-item @if($key==0) active @endif">
                                        <a id="carousel-selector-{{ $key }}" class="selected" data-target="#post-carousel"
                                            data-slide-to="{{ $key }}">
                                            <img src="{{ asset($image->ImageUrl) }}"
                                                alt="Product Thumbnail" class="img-fluid">
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-target="#post-carousel"
                                        data-slide-to="0">
                                        <img src="{{ asset($noImg) }}"
                                            alt="Product Thumbnail" class="img-fluid">
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-2 post-description">
                <div class="col">
                    <div class="card w-100 shadow-sm">
                        <h5 class="card-header">Description</h5>
                        <div class="card-body">
                            <div class="card-text p-1">
                                {{-- {{ dd($data) }} --}}
                                {!! Markdown::parse($data[0]->PostDesc . '') !!}
                                {{-- @markdown($data[0]->PostDesc) --}}
                            </div>

                            <div class="card-footer text-muted bg-transparent pb-0">
                                <div class="row">
                                    <div class="col px-0">
                                        <p>POST ID: <strong class="post-id"> {{ $data[0]->PostingKey }}</strong></p>
                                    </div>
                                    <div class="col px-0 text-right">
                                        <p class="py-0 my-0">Posted by: <a href="#"><strong
                                                    class="posted-by">{{ $data[0]->FirstName }}</strong></a></p>
                                        <p class="py-0 my-0">Posted: <span class="time-posted"> {{ date('d-M-Y', strtotime($data[0]->DateCreated)) }} </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row border-top">
                                    <div class="col pt-3 px-0 share-post"> Share on:
                                        <span class="twitter-share p-2 my-1" data-js="twitter-share">
                                            <i class="mdi mdi-twitter" aria-hidden="true"></i> Twitter
                                        </span>
                                        <span class="facebook-share p-2 my-1" data-js="facebook-share">
                                            <i class="mdi mdi-facebook" aria-hidden="true"></i> Facebook
                                        </span>
                                    </div>
                                    <div class="col pt-3 px-0 report-post text-right">
                                        <button type="button" class="btn btn-outline-danger report-item"
                                                data-toggle="modal" data-target="#report-item-modal">
                                                <i class="mdi mdi-exclamation-thick"></i> Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="row seller-profile mt-3">
                <div class="col">
                    <div class="card shadow-sm text-center">
                        <div class="card-header border-0 bg-white">
                            <div class="row d-flex justify-content-around">
                                <div class="col-auto">
                                    @if($data[0]->AccountType == 'S')
                                        <img class="rounded-circle profile-img" src="{{ asset($data[0]->ProfPhoto) }}" width="133" height="133">
                                    @elseif ($data[0]->AccountType == 'G' || $data[0]->AccountType == 'F')
                                        <img class="rounded-circle profile-img" src="{{ asset($data[0]->ProfPhoto) }}" width="133" height="133">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="font-weight-bold text-center seller-name">{{ $data[0]->FirstName }} {{ $data[0]->LastName }}</h5>
                                <p class="seller-membership text-muted">Member Since <span>{{ date('M-Y', strtotime($data[0]->UserCreated)) }}</span></p>
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
                                            <a href="{{ route('profile', $data[0]->UserId) }}" class="font-weight-bolder">Seller Profile</a>
                                        </div>
                                    </div>

                                    <div class="card-footer border-0 mb-2 mt-0 bg-white">
                                        <div class="btn-group seller-btn-group" role="group"
                                            aria-label="seller-offer">
                                            <button type="button"
                                                class="btn btn-light seller-chat border font-weight-bolder">
                                                Chat
                                            </button>
                                            <button type="button" class="btn btn btn-danger seller-make-offer"
                                                data-toggle="modal" data-target="#make-offer-modal">
                                                Make Offer
                                            </button>
                                            <button type="button" class="btn seller-show-number" data-toggle="popover"
                                                title="Seller Contact Number" data-placement="bottom"
                                                data-content="@if($data[0]->ContactNo == null) No Number Provided @else {{ $data[0]->ContactNo }} @endif">Show Number</button>

                                            {{-- <button type="button" class="btn seller-show-number">Show Number</button> --}}
                                        </div>

                                        {{-- <button type="button" class="btn btn-light seller-chat border font-weight-bolder">Chat</button>
                                            <button type="button" class="btn btn-danger seller-make-offer">Make Offer</button>
                                            <button type="button" class="btn seller-show-number">Show Number</button>--}}
                                    </div>
                                </div>
                        </div>
                    </div>

                    {{-- <div class="row Contact-seller mt-4">
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
                    </div> --}}
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
                                            <button class="btn btn-outline-secondary next-tips mx-auto mt-2">Show
                                                More</button>
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
    <div class="row">
        <div class="col mt-4 mx-3 pt-3 bg-white shadow-sm">
            <h3><span class="bd-content-title">Comments</span></h3>
            <div class="comment-wrapper">
                <div class="panel panel-info">
                    <div class="panel-heading">

                    </div>
                    <div class="panel-body">
                        <form action="#" method="post">
                            <div class="form-group">
                              <label for=""></label>
                              <textarea class="form-control" name="comment-box" id="comment-box" placeholder="Write a comment..." rows="3"></textarea>
                            </div>
                            <button type="button" class="btn btn-info pull-right">Post</button>
                        </form>
                        <div class="clearfix"></div>
                        <hr>
                        <ul class="media-list p-0">
                            <li class="media">
                                <a href="#" class="pull-left mr-2">
                                    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle rounded-circle">
                                </a>
                                <div class="media-body">
                                    <span class="text-muted pull-right">
                                        <small class="text-muted">30 min ago</small>
                                    </span>
                                    <strong class="text-success">@MartinoMont</strong>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="#" class="pull-left mr-2">
                                    <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle rounded-circle">
                                </a>
                                <div class="media-body">
                                    <span class="text-muted pull-right">
                                        <small class="text-muted">30 min ago</small>
                                    </span>
                                    <strong class="text-success">@LaurenceCorreil</strong>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Lorem ipsum dolor <a href="#">#ipsumdolor </a>adipiscing elit.
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="#" class="pull-left mr-2">
                                    <img src="https://bootdey.com/img/Content/user_3.jpg" alt="" class="img-circle rounded-circle">
                                </a>
                                <div class="media-body">
                                    <span class="text-muted pull-right">
                                        <small class="text-muted">30 min ago</small>
                                    </span>
                                    <strong class="text-success">@JohnNida</strong>
                                    <p>
                                        Lorem ipsum dolor <a href="#">#sitamet</a> sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </li>
                        </ul>
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
                @for ($a = 0 ; $a < 4; $a++ ) <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                    @for ($b = 0 ; $b < 4 ; $b++ ) <div class="col mb-4 post-card">
                        <div class="card">
                            <div class="card-header px-3 py-0">
                                <a href="#" class="btn card-profile-image">
                                    <div class="row">
                                        <div class="col-">
                                            <img src="{{ asset('images/2p9VXAn.jpg') }}" class="rounded-circle">
                                        </div>
                                        <div class="col posted-by">
                                            HUSTLER PH Branch
                                            <small class="text-muted">
                                                <p class="mb-1 posted-ago"><i
                                                        class="mdi mdi-chevron-double-up text-info"></i> Spotlight </p>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <img class="card-img post-card-img" src="http://i.imgur.com/I5ABT2v.jpg" alt="Vans">
                            <div class="card-body">
                                <h5 class="card-title post-title"><a href="#"
                                        class="card-link text-danger like">Vanguard Power</a></h5>
                                <p class="card-text post-desc">
                                    If you need a tough, commercial grade engine that makes you more productive, look to
                                    Vanguard.</p>
                            </div>
                            <div class="card-footer bg-transparent border-success">
                                <p class="post-price mb-0">&#8369; 999999 </p>
                                <p class="post-card-location mb-0"><i class="mdi mdi-google-maps"></i><span>
                                        Pampanga</span></p>
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

<!-- Make Offer Modal -->
@include('sections.make-offer-modal')
@include('sections.report-item-modal')
@endsection
