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
                @if($data[0]->AccountType == 'S')
                <img src="{{ asset($data[0]->ProfPhoto) }}" class="rounded-circle mx-auto">
                @elseif ($data[0]->AccountType == 'G' || $data[0]->AccountType == 'F')
                <img src="{{ $data[0]->ProfPhoto }}" class="rounded-circle mx-auto">
                @endif
                {{-- <img src="{{ asset('images/test.jpg') }}" class="rounded-circle mx-auto" alt="Profile Picture"> --}}
            </div>
            <div class="row">
                <div class="col profile-name">
                    <h1 class="text-center mx-auto font-weight-bolder">{{ $data[0]->FirstName }} {{ $data[0]->LastName }}</h1>
                    <div class="profile-handler text-muted text-center">
                        &commat;user_handler_to_be_changed
                        @if (!$own)
                        {{-- Hide if viewing own shop --}}
                            <form action="#" method="post" class="d-inline-block">
                                <button type="button" class="btn btn-light btn-sm follow-btn text-muted">Follow</button>
                            </form>
                        @endif
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
                        @if (!$own)
                        {{-- Hide if viewing own shop --}}
                            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#write-review-modal">Write Review</button>
                        @endif
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
        <div class="col-md-9 col-sm-12 mt-2 px-0">
            <h4 class="font-weight-bolder px-3">Shop <i class="mdi mdi-store"></i></h4>
            <div class="d-flex profile-listings">
                @foreach ($data as $item)
                <div class="col-md-3 mb-3 post-card">
                    <div class="card shadow">
                        <div class="card-header px-3 py-0 d-none">
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
                        <div class="card-body pb-1">
                            <h5 class="card-title post-title m-0">
                                <a href="{{ route('single-post', $item->PostingId) }}" class="card-link text-dark like">{{ $item->Posting }}</a>
                            </h5>
                            <p class="card-text post-desc">
                                {{ $item->ShortDescription }}
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <p class="post-price mb-0">&#8369; {{ number_format($item->UnitPrice, 0) }} </p>
                            <p class="post-card-location d-inline mb-0"><i class="mdi mdi-google-maps"></i><span>{{ $item->City }}</span></p>
                            @if ($own)
                            {{-- Hide if viewing own shop --}}
                            <div class="dropdown dropleft post-menu-secondary float-right">
                                <button class="btn btn-light dropdown-toggle p-0" type="button" id="post-menu-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="post-menu-1">
                                    <button class="dropdown-item btn repost-item" data-toggle="modal" data-target="#repost-item-post"><i class="mdi mdi-clipboard-arrow-up"></i> Repost</button>
                                    <button class="dropdown-item btn edit-item" data-toggle="modal" data-target="#edit-item-post" disabled><i class="mdi mdi-file-edit"></i> Edit</button>
                                    <button class="dropdown-item btn mark-as-sold" data-toggle="modal" data-target="#mark-as-sold-post" ><i class="mdi mdi-handshake"></i> Mark as Sold</button>
                                    <button class="dropdown-item btn delete-item text-danger" data-toggle="modal" data-target="#delete-item-post"><i class="mdi mdi-trash-can"></i> Delete</button>
                                </div>
                            </div>
                            @endif
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

    {{-- Repost Modal --}}
    @include('sections.repost-item-modal')

    {{-- Write Review Modal --}}
    @include('sections.write-review-modal')
</div>
@endsection
