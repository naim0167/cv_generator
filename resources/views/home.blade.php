@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-4 m-0 p-0"style="height: 100em; background:#104547" >
                    <div class="card">
                        <div class="card-header text-center" style="font-weight:bold;color:#9823db;background-color: #CAC4CE"><span class="fas fa-chalkboard-teacher" style="color:#725AC1;"></span> {{ __('DASHBOARD') }}</div>
                        <div class="card-body" style="border: 1px solid white;background-color:#104547">
                            <div class="col text-center">
                                <a href="{{route('cv.create')}}">
                                    <span class="fas fa-plus-circle" style="font-size:1rem;color:#fff;"/> Add a new CV
                                </a>
                            </div>
                        </div>
                        <div class="card-body" style="border: 1px solid white;background-color:#104547;">
                            <div class="col text-center">
                                <a href="{{route('cv.index')}}">
                                    <span class="fas fa-clipboard-list" style="font-size:1rem;color:#fff;"/> CV List
                                </a>
                            </div>
                        </div>
                        <div class="card-body" style="border: 1px solid white;background-color:#104547">
                            <div class="col text-center">
                                @if(session()->has('message'))
                                <div class="alert alert-success">{{session()->get('message')}}</div>
                                @elseif(session()->has('error'))
                                <div class="alert alert-danger">{{session()->get('error')}}</div>
                                @endif

                                <form action="/upload" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label class="btn custom-input-btn" style="color:white;font-size:1rem">
                                        <input type="file" name="image" style="display:none" >
                                        <i class="fa fa-cloud-upload"></i> Upload User Image
                                    </label>
                                    <br><br>
                                    <input type="submit" value="Upload">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 m-0 p-0">
                    <div class="card">
                        <div class="card-header text-center fas fa-file-pdf" style="font-weight:bold;color:#104547;background-color: #CAC4CE"> {{ __('CV OVERVIEW') }}</div>

                        <div class="card-body">
                            {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            {{('You are logged in!')}} --}}
                        </div>
                        <div class="card-body">
                        {{--
                            @if(session()->has('message'))
                            <div class="alert alert-success">{{session()->get('message')}}</div>
                            @elseif(session()->has('error'))
                            <div class="alert alert-danger">{{session()->get('error')}}</div>
                            @endif --}}

                        </div>

                    </div>

                </div>
            </div>
<br><br><br><br>
                {{-- <div class="card">
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
            HUMPTY DUMPTY
            </a>
            </div>
        </div> --}}
    </div>
</div>
@endsection
