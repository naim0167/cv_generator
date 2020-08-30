@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #CAC4CE">
                    <a href="{{route('cv.index')}}" class="bg-white-400 cursor-pointer rounded" style="color:#725AC1;float:right;font-weight:bold">
                        CV Overview <span class="fas fa-arrow-circle-right" />
                    </a>
                    <a href="/home" class="bg-white-400 cursor-pointer rounded">
                        <span class="fas fa-arrow-circle-left" style="color:#725AC1" /> Home
                    </a>
                    <h3 style="color:#242038; font-weight:bold; text-align:center"> CV GENERATOR</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
                <x-alert />
                <form action="{{route('cv.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        {{-- <h2><b>First Part</b></h2>
                        <hr>
                        <br> --}}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="firstname">First Name</label>
                                    <input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name"  required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Last Name">Last Name</label>
                                    <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name" required>
                                </div>
                            </div>
                            <label>Address</label>
                            <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input name="address" type="text" class="form-control" id="address" placeholder="Street Address" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input name="zipcode" type="text" class="form-control" id="zipcode" placeholder="Zip Code" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input name="city" type="text" class="form-control" id="city" placeholder="City" required>
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="phone">Telephone</label>
                                    <input name="phone" type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Telephone Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="mobile">Mobile Number</label>
                                    <input name="mobile" type="tel" class="form-control" id="mobile" placeholder="Ex.: 01677796817" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="cv_email">Email address</label>
                                    <input name="cv_email" type="cv_email" class="form-control" id="cv_email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="birthday">Birthday:</label>
                                    <input name="birthday" type="date" class="form-control" id="birthday" placeholder="Birthday" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nationality">Nationality</label>
                                    <input name="nationality" type="text" class="form-control" id="nationality" placeholder="Enter Nationality" required>
                                </div>
                            </div>
                            <label>Language</label>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input name="language1" type="text" class="form-control" id="language1" placeholder="First Language">
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="language2" type="text" class="form-control" id="language2" placeholder="Second Language">
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="language3" type="text" class="form-control" id="language3" placeholder="Third Language">
                                </div>
                            </div>
                            {{-- <input type="submit" name="title" class="py-2 px-2 border rounded" />
                            <input type="submit" value="Create" class="p-2 border rounded" /> --}}
                        {{-- <br>
                        <br> --}}
                    </div>
                    <div class="card-body">
                        <h2><b>Second Part</b></h2>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="profilesummary">Profile Summary</label>
                                <textarea name ="profilesummary" class="ckeditor form-control" id="profilesummary"></textarea>
                            </div>
                        </div>
                        <h5 for="professionalexperience">Professional Experience</h5>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="jobstartdate">Job Start Date</label>
                                <input name ="jobstartdate" type="date" class="form-control" id="jobstartdate" placeholder="Start Date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jobenddate">Job End Date</label>
                                <input name ="jobenddate" type="date" class="form-control" id="jobenddate" aria-describedby="jobenddatehelp" placeholder="End Date">
                                <small id="jobenddatehelp" class="form-text text-muted">Please don't select it if you are currently working there</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="jobtitle">Job Title</label>
                                <input name ="jobtitle" type="text" class="form-control" id="jobtitle" placeholder="Enter your job position">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="companyname">Company Name</label>
                                <input name ="companyname" type="text" class="form-control" id="companyname" placeholder="Enter company name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="joblocation">Job City</label>
                                <input name ="joblocation" type="text" class="form-control" id="joblocation" placeholder="Enter the place of work">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="workdetails">Work you did : </label>
                                <textarea name ="workdetails" class="ckeditor form-control" id="workdetails" rows="3" cols="100"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-success" style="float: right;"><b>+ ADD MORE</b></button>
                    </div>

                    <div id="third-section">
                        <div id="third-section-body">
                            <div class="card-body">
                                <h2><b>Third Part 1</b></h2>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="educationalInstitute_1">Educational Institue Name</label>
                                        <input type="text" name="educationalInstitute_1" class="form-control" id="educationalInstitute_1" placeholder="Enter your educational institues name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="educationCountry_1">Country</label>
                                        <input type="text" name="educationCountry_1" class="form-control" id="educationCountry_1" placeholder="Country Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="degreeName_1">Degree Name</label>
                                        <input type="text" name="degreeName_1" class="form-control" id="degreeName_1" placeholder="ex.- Bachelor's/Masters'">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="subjectName_1">Subject Name</label>
                                        <input type="text" name="subjectName_1" class="form-control" id="subjectName_1" placeholder="ex.- Software Engineering">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="educationstart_1">Start Date</label>
                                        <input type="date" name="educationstart_1" class="form-control" id="educationstart_1" placeholder="Start Date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="educationend_1">End Date</label>
                                        <input type="date" name="educationend_1" class="form-control" id="educationend_1" aria-describedby="educationendhelp_1" placeholder="End Date">
                                        <small id="educationendhelp_1" class="form-text text-muted">Please don't select it if you are currently studing there</small>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- add more button -->
                        <div class="card-body">
                            <button type="button" class="btn btn-success" style="float: right;" id="add_third_section_button"><b>+ ADD MORE</b></button>
                        </div>


                    </div>

                    <div class="card-body">
                        <h2><b>Fourth Part</b></h2>
                        <hr>
                        <br>
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="technicalSkills">Technical Skill Set </label>
                                    <textarea name="technicalSkills" class="ckeditor form-control" id="technicalSkills" rows="6" cols="100"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="personalInterest">Personal Interest</label>
                                    <textarea name="personalInterest" class="ckeditor form-control" id="personalInterest" rows="2" cols="100"></textarea>
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
                    <input class="btn btn-success mr-3" style="float:right;" type="submit" value="Submit" >
                    <br><br><br>
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

    var currentThirdSectionNumber = 1;

    $(document).ready(function () {

        $(document).on('click', '#add_third_section_button', function () {
            currentThirdSectionNumber++;
            var html = '<div class="card-body">\n' +
                        '    <h2><b>Third Part '+ currentThirdSectionNumber +'</b></h2>\n' +
                        '    <hr>\n' +
                        '    <div class="form-row">\n' +
                        '        <div class="form-group col-md-8">\n' +
                        '            <label for="educationalInstitute_'+currentThirdSectionNumber+'">Educational Institue Name</label>\n' +
                        '            <input type="text" name="educationalInstitute_'+currentThirdSectionNumber+'" class="form-control" id="educationalInstitute_'+currentThirdSectionNumber+'" placeholder="Enter your educational institues name">\n' +
                        '        </div>\n' +
                        '        <div class="form-group col-md-4">\n' +
                        '            <label for="educationCountry_'+currentThirdSectionNumber+'">Country</label>\n' +
                        '            <input type="text" name="educationCountry_'+currentThirdSectionNumber+'" class="form-control" id="educationCountry_'+currentThirdSectionNumber+'" placeholder="Country Name">\n' +
                        '        </div>\n' +
                        '    </div>\n' +
                        '    <div class="form-row">\n' +
                        '        <div class="form-group col-md-6">\n' +
                        '            <label for="degreeName_'+currentThirdSectionNumber+'">Degree Name</label>\n' +
                        '            <input type="text" name="degreeName_'+currentThirdSectionNumber+'" class="form-control" id="degreeName_'+currentThirdSectionNumber+'" placeholder="ex.- Bachelor\'s/Masters\'">\n' +
                        '        </div>\n' +
                        '        <div class="form-group col-md-6">\n' +
                        '            <label for="subjectName_'+currentThirdSectionNumber+'">Subject Name</label>\n' +
                        '            <input type="text" name="subjectName_'+currentThirdSectionNumber+'" class="form-control" id="subjectName_'+currentThirdSectionNumber+'" placeholder="ex.- Software Engineering">\n' +
                        '        </div>\n' +
                        '    </div>\n' +
                        '    <div class="form-row">\n' +
                        '        <div class="form-group col-md-6">\n' +
                        '            <label for="educationstart_'+currentThirdSectionNumber+'">Start Date</label>\n' +
                        '            <input type="date" name="educationstart_'+currentThirdSectionNumber+'" class="form-control" id="educationstart_'+currentThirdSectionNumber+'" placeholder="Start Date">\n' +
                        '        </div>\n' +
                        '        <div class="form-group col-md-6">\n' +
                        '            <label for="educationend_'+currentThirdSectionNumber+'">End Date</label>\n' +
                        '            <input type="date" name="educationend_'+currentThirdSectionNumber+'" class="form-control" id="educationend_'+currentThirdSectionNumber+'" aria-describedby="educationendhelp_'+currentThirdSectionNumber+'" placeholder="End Date">\n' +
                        '            <small id="educationendhelp_'+currentThirdSectionNumber+'" class="form-text text-muted">Please don\'t select it if you are currently studing there</small>\n' +
                        '        </div>\n' +
                        '    </div>\n' +
                        '</div>';

            $("#third-section-body").append(html);

        });

    });

</script>
@endsection

