@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CV Generator') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>

                <div class="card-body">
                {{-- <x-alert /> --}}
                    <form action="/cv/create" class="py-5" method="post">
                        @csrf
                        <input type="submit" name="title" class="py-2 px-2 border rounded" />
                        <input type="submit" value="Create" class="p-2 border rounded" />
                    </form>
            <a href="{{route('cv.index')}}" class="m-5 py-1 px-1 bg-white-400 cursor-pointer rounded">XXDD</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

