@extends('layouts.app')

@section('content')
<div class="container messages" id="messages">
    {{-- <div class="row">
        <div class="col">
            <h3><span class="">Messages</span></h3>
        </div>
    </div> --}}
    <div class="row mt-2 p-4 messages-row-box shadow">
        <div class="col-5 sidepanel border-right">
            <div class="profile">
                <div class="wrap row mb-4">
                    
                    <div class="col-auto">
                        <img class="rounded-circle profile-img mb-2 d-block m-auto" src="{{ asset('images/test.jpg') }}" width="60" height="60">
                    </div>
                    <div class="col pl-0 d-flex flex-row align-items-center">
                        <h3 class="font-weight-bolder text-left profile-name align-self-center">shoeph</h3>
                    </div>
                    <div class="col text-right">
                        <h5><span class="text-right px-2"><i class="mdi mdi-email"></i> Messages</span></h5>
                    </div>
                </div>
            </div>
            <div class="search-messenger">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Find</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Search">
                </div>
            </div>
            <div class="conversation-list">
                <ul class=" list-group">
                    <button class="list-group-item list-group-item-action contact border-bottom active" data-conversation="seller1-buyer1-item1">
                        <div class="wrap row">
                            <div class="col-auto px-2">
                                <img class="rounded-circle profile-img mb-2 d-block m-auto" src="{{ asset('images/prof1.jpg') }}"  width="40" height="40">
                            </div>
                            <div class="col pl-0 d-flex flex-row align-items-center">
                                <div class="sender-meta d-inline" id="sender-1">
                                    <p class="name mb-0">Louis Litt</p>
                                    <p class="posted-item mb-0 font-weight-bolder">Vans Sk8-Hi MTE Shoes</p>
                                    <p class="preview m-0 text-truncate">Quis viverra nibh cras pulvinar mattis nunc sed.</p>
                                </div>
                            </div>
                            <div class="col-2">
                                <small class="text-muted when">06/20</small>
                                <img class="rounded profile-img mb-2 d-block m-auto" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"  width="50" height="50">
                            </div>
                        </div>
                    </button>
                    
                    <button class="list-group-item list-group-item-action contact border-bottom" data-conversation="seller1-buyer2-item1">
                        <div class="wrap row">
                            <div class="col-auto px-2">
                                <img class="rounded-circle profile-img mb-2 d-block m-auto" src="{{ asset('images/prof2.jpg') }}"  width="40" height="40">
                            </div>
                            <div class="col pl-0 d-flex flex-row align-items-center">
                                <div class="sender-meta d-inline" id="sender-2">
                                    <p class="name mb-0">Matt Reees</p>
                                    <p class="posted-item mb-0 font-weight-bolder">Vanguard Power</p>
                                    <p class="preview m-0 text-truncate">Elit pellentesque habitant morbi tristique.</p>
                                </div>
                            </div>
                            <div class="col-2">
                                <small class="text-muted when">05/20</small>
                                <img class="rounded profile-img mb-2 d-block m-auto" src="{{ asset('images/2p9VXAn.jpg') }}"  width="50" height="50">
                            </div>
                        </div>
                    </button>
                    
                </ul>
            </div>
        </div>
        <div class="col message-between">
            <div class="messages-list">
                <div class="conversation active" id="seller1-buyer1-item1">
                    <div class="messenger-name">
                        <h3 class="font-weight-bolder sender-name">Louis Litt</h3>
                    </div>
                    <div class="row mb-2">
                        <div class="col-2">
                            <img class="rounded profile-img mb-2 d-block m-auto" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"  width="50" height="50">
                        </div>
                        <div class="col">
                            <span class="post-price text-danger">&#8369; 5000 </span>
                            <span class="post-title"><strong>Vans Sk8-Hi MTE Shoes</strong></span>
                        </div>
                    </div>
                    <ul>
                        <li class="sent">
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li class="replies">
                            <p>Auctor elit sed vulputate mi sit.</p>
                        </li>
                        <li class="replies">
                            <p>Sed nisi lacus sed viverra tellus in hac.</p>
                        </li>
                        <li class="sent">
                            <p>Nisi est sit amet facilisis magna etiam.</p>
                        </li>
                        <li class="replies">
                            <p>Nunc sed augue lacus viverra vitae.</p>
                        </li>
                        <li class="replies">
                            <p>Risus ultricies tristique nulla aliquet enim tortor at.</p>
                        </li>
                        <li class="sent">
                            <p>Urna id volutpat lacus laoreet.</p>
                        </li>
                        <li class="replies">
                            <p>Quis viverra nibh cras pulvinar mattis nunc sed.</p>
                        </li>
                        <li class="sent">
                            <p>Urna id volutpat lacus laoreet.</p>
                        </li>
                        <li class="replies">
                            <p>Quis viverra nibh cras pulvinar mattis nunc sed.</p>
                        </li>
                    </ul>
                </div>
                <div class="conversation" id="seller1-buyer2-item1">
                    <div class="messenger-name">
                        <h3 class="font-weight-bolder sender-name">Matt Reees</h3>
                    </div>
                    <div class="row mb-2">
                        <div class="col-2">
                            <img class="rounded profile-img mb-2 d-block m-auto" src="{{ asset('images/2p9VXAn.jpg') }}"  width="50" height="50">
                        </div>
                        <div class="col">
                            <span class="post-price text-danger">&#8369; 99999 </span>
                            <span class="post-title"><strong>Vanguard Power</strong></span>
                        </div>
                    </div>
                    <ul>
                        <li class="sent">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li class="replies">
                            <p>Porta non pulvinar neque laoreet suspendisse interdum consectetur libero.</p>
                        </li>
                        <li class="replies">
                            <p>Faucibus pulvinar elementum integer enim.</p>
                        </li>
                        <li class="sent">
                            <p>Risus nullam eget felis eget nunc lobortis mattis.</p>
                        </li>
                        <li class="replies">
                            <p>Purus semper eget duis at tellus at urna condimentum mattis.</p>
                        </li>
                        <li class="replies">
                            <p>Vivamus at augue eget arcu dictum varius duis at consectetur.</p>
                        </li>
                        <li class="sent">
                            <p>Erat imperdiet sed euismod nisi porta lorem mollis aliquam.</p>
                        </li>
                        <li class="replies">
                            <p>Elit pellentesque habitant morbi tristique.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="message-input">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Your message" aria-label="Your message">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="mdi mdi-send"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
