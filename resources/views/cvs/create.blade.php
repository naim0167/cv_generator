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
                <a href="{{route('cv.index')}}" class="m-5 bg-white-400 cursor-pointer rounded">XXDD</a>
                </div>
                <div class="card-body">
                    <h2><b>First Part</b></h2>
                    <hr>
                    <br>
                    {{-- <x-alert /> --}}
                    <form action="/cv/create" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <label>Address</label>
                        <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="address" placeholder="Street Address" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="zipcode" placeholder="Zip Code" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="city" placeholder="City" required>
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phone">Telephone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Telephone Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobile" placeholder="Ex.: 01677796817" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="birthday">Birthday:</label>
                                <input type="date" class="form-control" id="birthday" placeholder="Birthday" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nationality">Nationality</label>
                                <input type="text" class="form-control" id="nationality" placeholder="Enter Nationality" required>
                            </div>
                        </div>
                        <label>Language</label>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="language1" placeholder="First Language" required>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="language2" placeholder="Second Language" required>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="language3" placeholder="Third Language" required>
                            </div>
                        </div>
                        {{-- <input type="submit" name="title" class="py-2 px-2 border rounded" />
                        <input type="submit" value="Create" class="p-2 border rounded" /> --}}
                    </form>
                    <br>
                    <br>
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <h2><b>Second Part</b></h2>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="profilesummary">Profile Summary</label>
                                <textarea class="form-control" id="profilesummary" rows="3" cols="100"></textarea>
                            </div>
                        </div>
                        <h5 for="professionalexperience">Professional Experience</h5>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="jobstartdate">Job Start Date</label>
                                <input type="date" class="form-control" id="jobstartdate" placeholder="Start Date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jobenddate">Job End Date</label>
                                <input type="date" class="form-control" id="jobenddate" aria-describedby="jobenddatehelp" placeholder="End Date">
                                <small id="jobenddatehelp" class="form-text text-muted">Please don't select it if you are currently working there</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="jobtitle">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" placeholder="Enter your job position">
                                {{-- <textarea class="form-control" id="professionalexperienced" rows="3" cols="100"></textarea> --}}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="companyname">Company Name</label>
                                <input type="text" class="form-control" id="companyname" placeholder="Enter the place of work">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jobcity">Job City</label>
                                <input type="text" class="form-control" id="jobcity" placeholder="Enter the place you worked in">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="workdetails">Work you did : </label>
                                <textarea class="form-control" id="workdetails" rows="3" cols="100"></textarea>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <h2><b>Third Part</b></h2>
                    <hr>
                    <br>
                    <form action="/upload" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Please select your profile picture</h5>
                        <br>
                        <input type="file" name="image">
                        <input type="submit" value="Upload">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

