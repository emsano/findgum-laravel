@extends('layouts.app')

@section('content')
<div class="container register">
    @include('sections.welcome-banner')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="text-center">
                            <div class="btn-group btn-block mb-2">
                                <a href="https://www.facebook.com/v3.3/dialog/oauth?client_id=365825577459561&amp;state=96e5de9cb0e51a553a4ff9063945bc24&amp;response_type=code&amp;sdk=php-sdk-5.7.0&amp;redirect_uri=https%3A%2F%2Fwww.findgum.com%2Ffb-callback.php&amp;scope=email" class="btn btn-facebook btn-primary active">
                                    <i class="mdi mdi-facebook"></i>
                                </a>
                                <a href="https://www.facebook.com/v3.3/dialog/oauth?client_id=365825577459561&amp;state=96e5de9cb0e51a553a4ff9063945bc24&amp;response_type=code&amp;sdk=php-sdk-5.7.0&amp;redirect_uri=https%3A%2F%2Fwww.findgum.com%2Ffb-callback.php&amp;scope=email" class="btn btn-block btn-primary">Continue with Facebook</a>
                            </div>
                            <div class="btn-group btn-block mt-0 mb-2">
                                <a href="https://accounts.google.com/o/oauth2/auth?scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;redirect_uri=https%3A%2F%2Fwww.findgum.com%2Fgauth.php&amp;response_type=code&amp;client_id=148228441277-nc71p3s59o8k88e4ktfbc3uf54tjr4ch.apps.googleusercontent.com&amp;access_type=online" class="btn btn-danger btn-google active">
                                    <i class="mdi mdi-google"></i>
                                </a>
                                <a href="https://accounts.google.com/o/oauth2/auth?scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;redirect_uri=https%3A%2F%2Fwww.findgum.com%2Fgauth.php&amp;response_type=code&amp;client_id=148228441277-nc71p3s59o8k88e4ktfbc3uf54tjr4ch.apps.googleusercontent.com&amp;access_type=online" class="btn btn-block btn-google">Continue with Google</a>
                            </div>
                        </div>
                        <hr class="divider">

                        <div class="form-group row">
                            <label for="fname" class="">{{ __('First Name') }}</label>
                                <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="">{{ __('Last Name') }}</label>
                                <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password" class="">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="agree" id="agree" {{ old('agree') ? 'checked' : '' }}>
                                <label class="form-check-label" for="agree">
                                    {{ __('Agree with ') }} <a href="#">Terms and Policy</a>
                                </label>
                            </div>                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-12 px-0">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Create Account') }}
                                </button>
                            </div>
                            <div class="text-center mx-auto d-block mt-3 text-dark">
                                Already have an account? <a href="{{ route('login') }}">Sign In</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
