@extends('layouts.app')

@section('content')
<div class="container profile">
    <div class="row mb-2">
        <div class="col-12 banner rounded shadow p-0">
            <img src="{{ asset('images/banner-test.jpg') }}" class="img-fluid rounded" alt="Profile Banner">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-12 card shadow">
            <div class="profile-picture p-3 d-flex">
                <img src="{{ asset('images/test.jpg') }}" class="rounded-circle mx-auto" alt="Profile Picture">
            </div>
            <div class="row">
                <div class="col profile-name">
                    <h1 class="text-center mx-auto font-weight-bolder">shoesph</h1>
                    <div class="profile-handler text-muted text-center">
                        &commat;shoesph
                        <button type="button" class="btn btn-light btn-sm follow-btn text-muted">Follow</button>
                    </div>
                    <div class="profile-rating mt-2 px-2">
                        <p class="m-0">
                            <i data-rating="1" class="mdi mdi-star checked"></i> <span class="rating-cacl font-weight-bolder">5.00</span> out of 5 <span class="text-muted">(3 reviews)</span>
                        </p>
                    </div>
                    <div class="profile-address p-2">
                        <i class="mdi mdi-google-maps"></i> <span>Baguio City</span>
                    </div>
                    <div class="profile-write-review px-2">
                        <button type="button" class="btn btn-outline-info">Write Review</button>
                    </div>
                    <div class="profile-description mt-4 px-2">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Sem fringilla ut morbi tincidunt augue interdum velit. Nunc faucibus a pellentesque sit amet
                            porttitor eget dolor morbi. Amet commodo nulla facilisi nullam vehicula ipsum a arcu.
                            Ultrices sagittis orci a scelerisque purus semper eget duis at.
                        </p>
                    </div>
                    <div class="profile-follow-count text-muted font-italic">
                        <span class="text-muted followers">6 </span> Followers
                        <span class="text-muted following">1 </span> Following
                    </div>
                    <div class="profile-reviews mt-4 px-2">
                        <div id="accordion" class="">
                            <div class="card">
                                <div class="card-header d-sm-block d-md-none d-lg-none p-0" id="prof-reviews-heading">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link w-100 border" data-toggle="collapse" data-target="#prof-reviews-collapse"
                                            aria-expanded="true" aria-controls="prof-reviews-collapse">
                                            Reviews <i class="mdi mdi-menu-open"></i>
                                        </button>
                                    </h5>
                                </div>
                                <div id="prof-reviews-collapse" class="collapse d-md-block d-lg-block" aria-labelledby="prof-reviews-heading"
                                    data-parent="#accordion">
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush review-list">
                                            <li class="list-group-item">
                                                <div class="row reviewed-by">
                                                    <div class="col-2 rb-profile-img p-0">
                                                        <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle d-block mx-auto" alt="profile image">
                                                    </div>
                                                    <div class="col-10 rb-content">
                                                        <p class="m-0 p-0">
                                                            <span class="rb-user font-weight-bolder">reyess123</span><span class="text-muted"> 3 months ago</span>
                                                        </p>
                                                        <div class="star-rating col p-0">
                                                            <i class="mdi mdi-star checked" data-rating="1"></i>
                                                            <i class="mdi mdi-star checked" data-rating="2"></i>
                                                            <i class="mdi mdi-star checked" data-rating="3"></i>
                                                            <i class="mdi mdi-star checked" data-rating="4"></i>
                                                            <i class="mdi mdi-star checked" data-rating="5"></i>
                                                        </div>
                                                        <p class="review-text">
                                                            Amet commodo nulla facilisi nullam vehicula ipsum a arcu.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row reviewed-by">
                                                    <div class="col-2 rb-profile-img p-0">
                                                        <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle d-block mx-auto" alt="profile image">
                                                    </div>
                                                    <div class="col-10 rb-content">
                                                        <p class="m-0 p-0">
                                                            <span class="rb-user font-weight-bolder">Army11</span><span class="text-muted"> 3 months ago</span>
                                                        </p>
                                                        <div class="star-rating col p-0">
                                                            <i class="mdi mdi-star checked" data-rating="1"></i>
                                                            <i class="mdi mdi-star checked" data-rating="2"></i>
                                                            <i class="mdi mdi-star checked" data-rating="3"></i>
                                                            <i class="mdi mdi-star checked" data-rating="4"></i>
                                                            <i class="mdi mdi-star checked" data-rating="5"></i>
                                                        </div>
                                                        <p class="review-text">
                                                            Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt. Tempor commodo ullamcorper a lacus vestibulum sed arcu non odio.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row reviewed-by">
                                                    <div class="col-2 rb-profile-img p-0">
                                                        <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle d-block mx-auto" alt="profile image">
                                                    </div>
                                                    <div class="col-10 rb-content">
                                                        <p class="m-0 p-0">
                                                            <span class="rb-user font-weight-bolder">Mnet_Show</span><span class="text-muted"> 3 months ago</span>
                                                        </p>
                                                        <div class="star-rating col p-0">
                                                            <i class="mdi mdi-star checked" data-rating="1"></i>
                                                            <i class="mdi mdi-star checked" data-rating="2"></i>
                                                            <i class="mdi mdi-star checked" data-rating="3"></i>
                                                            <i class="mdi mdi-star checked" data-rating="4"></i>
                                                            <i class="mdi mdi-star checked" data-rating="5"></i>
                                                        </div>
                                                        <p class="review-text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row ads-temp mt-3">
                <div class="col">
                    <p class="text-center text-muted mx-auto m-0">Ad</p>
                    <img src="https://via.placeholder.com/150" class="img-fluid d-block mx-auto" alt="">
                </div>
            </div>
        </div>
        {{-- {{ dd($data) }} --}}
        <div class="col-md-9 col-sm-12 mt-2 ">
            <h4 class="font-weight-bolder">Shop <i class="mdi mdi-store"></i></h4>
            <div class="d-flex profile-listings">
                @foreach ($data as $item)
                <div class="col-md-3 mb-4 post-card">
                    <div class="card shadow">
                        <div class="card-header px-3 py-0">
                            <a href="#" class="btn card-profile-image">
                                <div class="row">
                                    {{-- <div class="col-">
                                        @if($item->AccountType == 'S')
                                        <img src="{{ asset($item->ProfPhoto) }}" class="rounded-circle">
                                        @elseif ($item->AccountType == 'G' || $item->AccountType == 'F')
                                        <img src="{{ $item->ProfPhoto }}" class="rounded-circle">
                                        @endif
                                    </div> --}}
                                    <div class="col posted-by">
                                        {{-- {{ $item->FirstName }} --}}
                                        <small class="text-muted"><p class="mb-1 posted-ago">
                                            {{ Carbon\Carbon::parse($item->DateCreated)->diffForHumans() }}
                                        </p></small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @if ($item->PostingStatus == 'S')
                            <p class="bg-danger text-white text-center w-100 p-1 position-absolute">SOLD</p>
                        @endif
                        <a href="{{ route('single-post', $item->PostingId) }}" >
                            @if ($item->ImageUrl)
                                <img class="card-img post-card-img"
                                src="{{ asset($item->ImageUrl) }}" alt="{{ $item->Posting }}">
                            @else
                                <img class="card-img post-card-img"
                                src="{{ asset($noImg) }}" alt="{{ $item->Posting }}">
                            @endif
                        </a>
                        <div class="card-body">
                            <h5 class="card-title post-title">
                                <a href="{{ route('single-post', $item->PostingId) }}" class="card-link text-danger like">{{ $item->Posting }}</a>
                            </h5>
                            <p class="card-text post-desc">
                                {{ $item->ShortDescription }}
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-success">
                            <p class="post-price mb-0">&#8369; {{ number_format($item->UnitPrice, 0) }} </p><span class="post-condition float-right font-weight-bolder">New</span>
                            <p class="post-card-location mb-0"><i class="mdi mdi-google-maps"></i><span>{{ $item->City }}</span></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            </div>
            @if($data->count())
            <div class="row">
                <div class="col mx-auto text-center align-self-center pager">
                    {{ $data->links() }}
                </div>
            </div>
        @endif
        </div>
    </div>

    {{-- Edit Modal --}}
    @include('sections.edit-post-modal')
    {{-- End Edit Modal --}}

    {{-- Repost Modal --}}
    @include('sections.repost-item-modal')
    {{-- End Repost Modal --}}
</div>
@endsection
