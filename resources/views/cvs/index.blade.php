@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
                <a href="{{route('cv.create')}}" class="mx-5 py-2 text-blue-400 curson pointer text-black">
                    {{-- <span class="fas fa-plus-circle"></span> --}}INDEX
                </a>
                <br>
                {{-- <div class="image-container">
                    <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar" width="40" height="30">
                </div> --}}
                <div class="row card-body">
                    <div class="col-md-4" >
                        <center>
                            <h1>{{Auth::user()->name}}</h1>
                            <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar" width="200" height="200">
                        </center>
                    </div>
                    <div class="col-md-8">
                        <h2 style="border-bottom: 0.2rem solid #e6e6e6">Profile Summary</h2>
                        <center>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
