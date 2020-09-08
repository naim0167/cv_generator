
<style>
    .social-list-item {
        height: 2rem;
        width: 2rem;
        line-height: calc(2rem - 2px);
        display: block;
        border: 2px solid #adb5bd;
        border-radius: 50%;
    }
    .bg-pattern{
        background-image: url(https://i.pinimg.com/originals/72/f1/81/72f181df88378e85363bf7c0e2a6d53c.jpg);
        background-size: cover;
    }
</style>

@extends('layouts.app')
<img src="https://cdn.pixabay.com/photo/2013/07/13/09/45/whale-155958_1280.png"
    style="position: absolute;width:100%;height:100%; opacity:80%">
@section('content')
<div class="container col-6">
    <div class="row justify-content-center">
        <div class="col-md-8" style="margin-top:1em">
            <div class="bg-pattern">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                <div class="text-md-center">
                    <br><br>
                    <h1>
                        <a href="/" class="text-Info"style="text-decoration : none">CV Generator</a>
                    </h1>
                    <p>Enter your email address and password to <br> access admin panel.</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group" >
                            <label for="email" class="col-md-8 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-8 col-form-label text-md-left">{{ __('Password') }}</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <div class="form-group ">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="text-md-center">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                        <div class="text-md-center">
                            <h6><b>Sign in with</b></h6>
                            <ul class="list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="social-list-item border-primary text-primary"><i class="fab fa-facebook" style="margin-top:25%"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="social-list-item border-danger text-danger"><i class="fab fa-google" style="margin-top:25%"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="social-list-item border-info text-info text-info"><i class="fab fa-twitter" style="margin-top:25%"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="social-list-item border-secondary text-secondary"><i class="fab fa-github" style="margin-top:25%"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
