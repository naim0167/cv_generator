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
                    <a href="{{route('cv.index')}}" class="m-5 bg-white-400 cursor-pointer rounded">CV =></a>
                </div>
                <x-alert />
                @foreach ($users as $cv)
                {{-- {!!dd($cv->job_start_date)!!} --}}
                <form action="{{route('cv.update',$cv->id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                        <h2><b>First Part</b></h2>
                        <hr>
                        <br>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="firstname">First Name</label>
                                    <input name="firstname" type="text" value="{{$cv->firstname}}" class="form-control" id="firstname" placeholder="First Name"  required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Last Name">Last Name</label>
                                    <input name="lastname" type="text" value="{{$cv->lastname}}" class="form-control" id="lastname" placeholder="Last Name" required>
                                </div>
                            </div>
                            <label>Address</label>
                            <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input name="address" type="text" value="{{$cv->address}}" class="form-control" id="address" placeholder="Street Address" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input name="zipcode" type="text" value="{{$cv->zipcode}}" class="form-control" id="zipcode" placeholder="Zip Code" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input name="city" type="text" value="{{$cv->city}}" class="form-control" id="city" placeholder="City" required>
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="phone">Telephone</label>
                                    <input name="phone" type="tel" value="{{$cv->phone}}" class="form-control" id="phone" name="phone" placeholder="Enter Telephone Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="mobile">Mobile Number</label>
                                    <input name="mobile" type="tel" value="{{$cv->mobile}}" class="form-control" id="mobile" placeholder="Ex.: 01677796817" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="cv_email">Email address</label>
                                    <input name="cv_email" type="cv_email" value="{{$cv->cv_email}}" class="form-control" id="cv_email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="birthday">Birthday:</label>
                                    <input name="birthday" type="date" value="{{$cv->birthday}}" class="form-control" id="birthday" placeholder="Birthday" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nationality">Nationality</label>
                                    <input name="nationality" type="text" value="{{$cv->nationality}}" class="form-control" id="nationality" placeholder="Enter Nationality" required>
                                </div>
                            </div>
                            <label>Language</label>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input name="language1" type="text" value="{{$cv->language1}}" class="form-control" id="language1" placeholder="First Language">
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="language2" type="text" value="{{$cv->language2}}" class="form-control" id="language2" placeholder="Second Language">
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="language3" type="text" value="{{$cv->language3}}" class="form-control" id="language3" placeholder="Third Language">
                                </div>
                            </div>
                        {{-- <input type="submit" name="title" class="py-2 px-2 border rounded" />
                            <input type="submit" value="Create" class="p-2 border rounded" /> --}}
                        <br>
                        <br>
                    </div>
                    <div class="card-body">
                        <h2><b>Second Part</b></h2>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="profilesummary">Profile Summary</label>
                                <textarea name ="profilesummary" class="ckeditor form-control" id="profilesummary">{{$cv->profilesummary}}</textarea>
                            </div>
                        </div>
                        <h5 for="professionalexperience">Professional Experience</h5>
                        <hr>
                        {{-- {{dd($cv)}}; --}}
                        {{-- value="{{$cvs_work->jobstartdate}}"
                        value="{{$cvs_work->jobenddate}}"
                        value="{{$cvs_work->jobtitle}}"
                        value="{{$cvs_work->company_name}}"
                        value="{{$cvs_work->joblocation}}"
                        value="{{$cvs_work->workdetails}}" --}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="jobstartdate">Job Start Date</label>
                                <input name ="jobstartdate" type="date" class="form-control" id="jobstartdate" placeholder="Start Date" value="{{$cv->job_start_date}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jobenddate">Job End Date</label>
                                <input name ="jobenddate" type="date" class="form-control" id="jobenddate" aria-describedby="jobenddatehelp" placeholder="End Date" value="{{$cv->job_end_date}}">
                                <small id="jobenddatehelp" class="form-text text-muted">Please don't select it if you are currently working there</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="jobtitle">Job Title</label>
                                <input name ="jobtitle" type="text" class="form-control" id="jobtitle" placeholder="Enter your job position" value="{{$cv->job_title}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="companyname">Company Name</label>
                                <input name ="companyname" type="text" class="form-control" id="companyname" placeholder="Enter company name" value="{{$cv->company_name}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="joblocation">Job City</label>
                                <input name ="joblocation" type="text" class="form-control" id="joblocation" placeholder="Enter the place of work" value="{{$cv->job_location}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="workdetails">Work you did : </label>
                                <textarea name ="workdetails" class="ckeditor form-control" id="workdetails" rows="6" cols="100">{{$cv->workdetails}}</textarea>
                            </div>
                        </div>
                        <button class="btn btn-success" style="float: right;"><b>+ ADD MORE</b></button>
                    </div>
                    <div class="card-body">
                        @csrf
                        <h2><b>Third Part</b></h2>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="educationalInstitute">Educational Institue Name</label>
                                <input name ="educationalInstitute" type="text" class="form-control" id="educationalInstitute"  placeholder="Enter your educational institues name" value="{{$cv->education_institute}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="educationCountry">Country</label>
                                <input name ="educationCountry" type="text" class="form-control" id="educationCountry" placeholder="Country Name" value="{{$cv->education_location}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="degreeName">Degree Name</label>
                                <input name ="degreeName" type="text" class="form-control" id="degreeName" placeholder="ex.- Bachelor's/Masters'" value="{{$cv->education_degree}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="subjectName">Subject Name</label>
                                <input name ="subjectName" type="text" class="form-control" id="subjectName" placeholder="ex.- Software Engineering" value="{{$cv->education_subject}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="educationstart">Start Date</label>
                                <input name ="educationstart" type="date" class="form-control" id="educationstart" placeholder="Start Date" value="{{$cv->education_start_date}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="educationend">End Date</label>
                                <input name ="educationend" type="date" class="form-control" id="educationend" aria-describedby="educationendhelp" placeholder="End Date" value="{{$cv->education_end_date}}">
                                <small id="educationendhelp" class="form-text text-muted">Please don't select it if you are currently studing there</small>
                            </div>
                        </div>
                        <button class="btn btn-success" style="float: right;"><b>+ ADD MORE</b></button>
                    </div>
                    <div class="card-body">
                        <h2><b>Fourth Part</b></h2>
                        <hr>
                        <br>
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="technicalSkills">Technical Skill Set </label>
                                    <textarea name="technicalSkills" class="ckeditor form-control" id="technicalSkills" rows="6" cols="100">{{$cv->technicalSkills}}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="personalInterest">Personal Interest</label>
                                    <textarea name="personalInterest" class="ckeditor form-control" id="personalInterest" rows="2" cols="100">{{$cv->personalInterest}}</textarea>
                                </div>
                            </div>
                    </div>
                    <div class="card-body">
                        <h2><b>Final Part</b></h2>
                        <hr>
                        <br>
                            @csrf
                            <h5>Please select your profile picture</h5>
                            <br>
                            <input type="file" name="image">
                            <input type="submit" value="Upload">
                    </div>
                    <br><br>
                    <input class="btn btn-success" style="float: right;" type="submit" value="Update">
                    <br>
                @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
{{-- fetching all text area for ckeditor --}}
<script>
    var allEditors = document.querySelectorAll('.ckeditor');
    for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(allEditors[i]);
    }
</script>
@endsection
