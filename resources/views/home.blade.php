@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{('You are logged in!')}}
                </div>
                <div class="card-body">

                    @if(session()->has('message'))
                    <div class="alert alert-success">{{session()->get('message')}}</div>
                    @elseif(session()->has('error'))
                    <div class="alert alert-danger">{{session()->get('error')}}</div>
                    @endif

                    <form action="/upload" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <input type="submit" value="Upload">
                    </form>
                </div>
            <a href="{{route('cv.index')}}" class="mx-5 py-2 text-blue-400 curson pointer text-black">
            {{-- <span class="fas fa-plus-circle"></span> --}}HUMPTY DUMPTY
            </a>
            </div>
        </div>
    </div>
</div>
@endsection
