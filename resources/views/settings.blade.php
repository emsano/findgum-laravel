@extends('layouts.app')

@section('content')
<div class="container settings">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="list-group mb-3" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-edit-profile-list" data-toggle="list"
                    href="#list-edit-profile" role="tab" aria-controls="home">Edit Profile</a>
                <a class="list-group-item list-group-item-action" id="list-password-list" data-toggle="list"
                    href="#list-password" role="tab" aria-controls="passord">Change Password</a>
                {{-- <a class="list-group-item list-group-item-action" id="list-notifications-list" data-toggle="list"
                    href="#list-notifications" role="tab" aria-controls="notificaitons">Notifications</a>
                <a class="list-group-item list-group-item-action" id="list-dap-list" data-toggle="list" href="#list-dap"
                    role="tab" aria-controls="dap">Data and Privacy</a> --}}
            </div>
        </div>
        <div class="col-md-6">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-edit-profile" role="tabpanel"
                    aria-labelledby="list-edit-profile">
                    <h2 class="mb-3">Edit Profile</h2>
                    <h3>Profile Photo <i class="mdi mdi-face-recognition"></i></h3>
                    <div class="row px-3">
                        <div class="col-md-4 col-sm-12">
                            <div class="profile-picture p-3 text-center">
                                <img src="{{ asset('images/test.jpg') }}"
                                    class="rounded-circle align-self-center  mx-auto" alt="Profile Picture">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 align-self-center">
                            <div class="file-upload">
                                <div class="form-group">
                                    <form action="#" id="profile-picture-form">
                                        <p class="m-1">Clear frontal face photos are important for buyers and sellers to
                                            learn about each other.</p>
                                        <label class="file-upload-label text-center btn btn-outline-secondary"
                                            for="profile-pic-upload">Upload a Photo</label>
                                        <input type="file" class="form-control-file file-upload-input"
                                            name="file-upload" id="profile-pic-upload" placeholder=""
                                            aria-describedby="fileHelpId" accept="image/*" hidden>
                                        <small id="fileHelpId" class="form-text text-muted">*Only image files are
                                            accepted.</small>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Personal Information <i class="mdi mdi-folder-information-outline"></i></h3>
                    <div class="row px-3">
                        <div class="col">
                            <form id="personal-info-form">
                                <div class="form-group">
                                    <label for="seller-name">Seller Name <small class="text-muted"> (This shall be the
                                            name of your shop)</small></label>
                                    <input type="text" class="form-control" id="seller-name">
                                </div>
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname">
                                </div>
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname">
                                </div>
                                <div class="form-group mb-0">
                                    <label for="fname">Mobile Number <small class="text-muted"> (Show or Hide your
                                            number to Buyers)</small> </label>
                                    <input type="number" class="form-control" id="mobile-number">
                                </div>
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Show</label>
                                </div>
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Hide</label>
                                </div>
                                <div class="form-group">
                                    <label for="about-me">About Me</label>
                                    <textarea class="form-control about-me" id="about-me" rows="3"
                                        maxlength="255"></textarea>
                                    <small id="about-me-chars" class="text-muted">255</small><small class="text-muted">
                                        /255</small>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-password" role="tabpanel" aria-labelledby="list-password-list">
                    <h2 class="mb-3">Change Password</h2>
                    <div class="px-2">
                        {{-- <form class="form" role="form" autocomplete="off">
                            <div class="form-group">
                                <label for="inputPasswordOld">Current Password</label>
                                <input type="password" class="form-control" id="inputPasswordOld" required="">
                            </div>
                            <div class="form-group">
                                <label for="inputPasswordNew">New Password</label>
                                <input type="password" class="form-control" id="inputPasswordNew" required="">
                                <span class="form-text small text-muted">
                                    The password must be 8-20 characters, and must <em>not</em> contain spaces.
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="inputPasswordNewVerify">Verify</label>
                                <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                                <span class="form-text small text-muted">
                                    To confirm, type the new password again.
                                </span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg float-right">Save</button>
                            </div>
                        </form> --}}

                        <form method="POST" action="{{ route('password.update') }}" autocomplete="off">
                            @csrf
                            
                            {{ Form::hidden('_token', csrf_token()) }}

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
