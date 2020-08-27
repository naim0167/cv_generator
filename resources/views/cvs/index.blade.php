
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <x-alert />
                </div>
                @foreach ($cvs as $cv)
                <a href="{{route('cv.edit',$cv->id)}}" class="right">EDIT</a>
                {{-- Deleteing Form --}}
                <div>
                    <span class="button fas fa-times cursor-pointer" onclick="event.preventDefault();
                                if(confirm('Are you really want to delete?')){
                                document.getElementById('form-delete-{{$cv->id}}')
                                .submit()
                                }" />

                    <form style="display:none" id="{{'form-delete-'.$cv->id}}" method="post"
                        action="{{route('cv.destroy',$cv->id)}}">
                        @csrf
                        @method('delete')
                    </form>
                </div>

                <div class="row card-body" style="padding:0 1rem 1rem 1rem">
                    <div class="col-md-4 pt-5" style="background-color:#e6e6e6" >
                        <center>
                            <h1>{{$cv->firstname}} {{$cv->lastname}}</h1>
                            <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar" width="200" height="200">
                        </center>
                        <div style="margin-left:2.2rem;margin-top:2rem">
                            <h4><b>Address:</b></h4>
                            <h5>{{$cv->address}}</h5>
                            <h5>{{$cv->zipcode}}, {{$cv->city}}</h5>
                            <br>
                            <h4><b>Telephone:</b></h4>
                            <h5>{{$cv->mobile}}</h5>
                            <br>
                            <h4><b>Email:</b></h4>
                            <h5><a href="{{$cv->cv_email}}">{{$cv->cv_email}}</a></h5>
                            <br>
                            <h4><b>Nationality:</b></h4>
                            <h5>{{$cv->nationality}}</h5>
                            <br>
                            <h4><b>Language:</b></h4>
                            <h5>{{$cv->language1}}</h5>
                            <h5>{{$cv->language2}}</h5>
                            <h5>{{$cv->language3}}</h5>
                            <br>
                            <h4><b>Github:</b></h4>
                            <h5>github.com/naim0167</h5>
                        </div>
                    </div>
                    <div class="col-md-8 pt-5 px-4" style="line-height:125%">
                        @foreach ($works as $work)
                            @if($work->cv_id === $cv->id)
                                <h2 style="border-bottom: 0.2rem solid #e6e6e6"><b>Profile Summary</b></h2>
                                <h5 class="pr-4 pt-1 text-justify">{!!$cv->profilesummary!!}</h5>
                                <br>
                                <h2 style="border-bottom: 0.2rem solid #e6e6e6"><b>Professional Experience</b></h2>
                                <h6><b style="float:right">{{$work->job_start_date}} – {{$work->job_end_date}}</b></h6>
                                <br><br>
                                <h3><b>
                                {{$work->job_title}} at {{$work->company_name}} in {{$work->job_location}}
                                </b></h3>
                                <br>
                                <div style="padding:0 5% 0 5%">
                                    <h5>{!!$work->workdetails!!}</h5>
                                </div>
                            @endif
                        @endforeach
                        <br>
                        @foreach ($educations as $education)
                            @if($education->cv_id === $cv->id)
                                <h2 style="border-bottom: 0.2rem solid #e6e6e6"><b>Education</b></h2>
                                <h6><b style="float:right">{{$education->education_start_date}} – {{$education->education_end_date}}</b></h6>
                                <br><br>
                                <h3><b>{{$education->education_degree}} in {{$education->education_subject}}</b></h3>
                                <h5 class="pr-4 pt-1 text-justify">– {{$education->education_institute}}, {{$education->education_location}}</h5>
                            @endif
                        @endforeach
                        <br>
                        <h2 style="border-bottom: 0.2rem solid #e6e6e6"><b>Technical Skill</b></h2>
                        <br>
                        <div style="padding:0 5% 0 5%">
                            <h5 class="pr-4 pt-1 text-justify">{!!$cv->technicalSkills!!}</h5>
                        </div>
                        <br>
                        <h2 style="border-bottom: 0.2rem solid #e6e6e6"><b>Personal Interest</b></h2>
                        <br>
                        <div style="padding:0 5% 0 5%">
                            <h5 class="pr-4 pt-1 text-justify">{!!$cv->personalInterest!!}</h5>
                        </div>
                        <br>
                    </div>
                </div>
                <br><br><hr><center>END</center><hr>
                @endforeach
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
                <a href="{{route('cv.create')}}" class="btn btn-warning mx-5 py-2 curson pointer">
                    {{-- <span class="fas fa-plus-circle"></span> --}} GO TO INDEX
                </a>
                <br>
                {{-- <div class="image-container">
                                    <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar" width="40" height="30">
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
