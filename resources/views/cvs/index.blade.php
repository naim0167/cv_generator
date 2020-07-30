@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="row card-body" style="padding:0 1rem 1rem 1rem">
                    <div class="col-md-4 pt-5" style="background-color:#e6e6e6" >
                        <center>
                            <h1>{{Auth::user()->name}}</h1>
                            <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar" width="200" height="200">
                        </center>
                        <div style="margin-left:2.2rem;margin-top:2rem">
                            <h4><b>Address:</b></h4>
                            <h5>Dr.-Martinet-Straße 3,</h5>
                            <h5>96049,Bamberg</h5>
                            <br>
                            <h4><b>Telephone:</b></h4>
                            <h5>015 210 608 651</h5>
                            <br>
                            <h4><b>Email:</b></h4>
                            <h5><a href="naim93bd@gmail.com">naim93bd@gmail.com</a></h5>
                            <br>
                            <h4><b>Nationality:</b></h4>
                            <h5>Bangladeshi</h5>
                            <br>
                            <h4><b>Nationality:</b></h4>
                            <h5>English - C1</h5>
                            <h5>Deutsch - A2</h5>
                            <br>
                            <h4><b>Github:</b></h4>
                            <h5>github.com/naim0167</h5>
                        </div>
                    </div>
                    <div class="col-md-8 pt-5 px-4" style="line-height:125%">
                        <h2 style="border-bottom: 0.2rem solid #e6e6e6"><b>Profile Summary</b></h2>
                        <h5 class="pr-4 pt-1 text-justify" >A web engineer with 1-year experience in web
                        application development. Has excellent design &
                        coding skill along with efficient problem-solving
                        capabilities. Also, has the skillset to convert the
                        client’s requirements into exciting web applications.</h5>
                        <br>

                        <h2 style="border-bottom: 0.2rem solid #e6e6e6"><b>Professional Experience</b></h2>
                        <h6><b style="float:right">03/2019 – Current</b></h6>
                        <br><br>
                        <h3><b>
                            Web Application Developer at Helfende Franken in Weismain
                        </b></h3>
                        <br>
                        <div style="padding:0 5% 0 5%">
                            <h5>
                                • The responsibility is to work with the team and create modules using web technologies for the company.
                            </h5>
                            <h5>
                                • The responsibility is to work with the team and create modules using web technologies for the company.
                            </h5>
                            <h5>
                                • Developed client relationship database, contract generator, job portal, ticket system etc.
                            </h5>
                            <h5>
                                • Also worked with SIPGATE, REST API & MVC design pattern.
                            </h5>
                        </div>
                        <br>

                        <h2 style="border-bottom: 0.2rem solid #e6e6e6"><b>Education</b></h2>
                        <h6><b style="float:right">01/2013 – 01/2017</b></h6>
                        <br><br>
                        <h3><b>Bachelor’s in Software Engineering</b></h3>
                        <h5 class="pr-4 pt-1 text-justify">– Daffodil International University, Bangladesh</h5>
                        <br>

                        <h6><b style="float:right">10/2018 – Current</b></h6>
                        <br><br>
                        <h3><b>Master’s in International Software System Science</b></h3>
                        <h5 class="pr-4 pt-1 text-justify">– Otto-Friedrich-University Bamberg, Germany</h5>
                        <br>

                        <h2 style="border-bottom: 0.2rem solid #e6e6e6"><b>Technical Skill</b></h2>
                        <br>
                        <div style="padding:0 5% 0 5%">
                            <h5>
                                • The responsibility is to work with the team and create modules using web technologies for the company.
                            </h5>
                            <h5>
                                • The responsibility is to work with the team and create modules using web technologies for the company.
                            </h5>
                            <h5>
                                • Developed client relationship database, contract generator, job portal, ticket system etc.
                            </h5>
                            <h5>
                                • Also worked with SIPGATE, REST API & MVC design pattern.
                            </h5>
                        </div>
                        <br>

                        <h2 style="border-bottom: 0.2rem solid #e6e6e6"><b>Personal Interest</b></h2>
                        <br>
                        <div style="padding:0 5% 0 5%">
                            <h5>
                            • Chess, Classical Music, Photography, Reading,
                            Travelling.
                            </h5>
                        </div>

                        <br>
                    </div>
                </div>

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
