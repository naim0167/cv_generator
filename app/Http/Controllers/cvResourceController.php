<?php

namespace App\Http\Controllers;
use App\cv;
use App\cvs_work;
use App\cvs_education;
use Illuminate\Http\Request;
use App\Http\Requests\cvcreaterequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class cvResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        // $cvs = DB::table('cvs')->get();
        // $works = DB::table('cvs_work')->get();
        $cvs_educations = DB::table('cvs_educations')->get();
        return view('cvs.index')->with(['cvs_educations'=>$cvs_educations]);
        // return view('cvs.index')->with(['cvs'=>$cvs,'works'=>$works,'educations'=>$educations]);
        // return view('user.index', ['users' => $users]);

        // $cvs = cv::all();
        // return view('cvs.index')->with(['cvs'=>$cvs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cvs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(cvcreaterequest $request)
    {
        $cv =cv::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'address'=>$request->address,
            'zipcode'=>$request->zipcode,
            'city'=>$request->city,
            'phone'=>$request->phone,
            'mobile'=>$request->mobile,
            'cv_email'=>$request->cv_email,
            'birthday'=>$request->birthday,
            'nationality'=>$request->nationality,
            'language1'=>$request->language1,
            'language2'=>$request->language2,
            'language3'=>$request->language3,
            'profilesummary'=>$request->profilesummary,
            'technicalSkills'=>$request->technicalSkills,
            'personalInterest'=>$request->personalInterest
        ]);
        $work = cvs_work::create([
            'job_start_date'=>$request->jobstartdate,
            'job_end_date'=>$request->jobenddate,
            'job_title'=>$request->jobtitle,
            'company_name'=>$request->companyname,
            'job_location'=>$request->joblocation,
            'workdetails'=>$request->workdetails,
            'cv_id'=>$cv->id,
        ]);
        $education = cvs_education::create([
            'education_institute'=>$request->educationalInstitute,
            'education_location'=>$request->educationCountry,
            'education_degree'=>$request->degreeName,
            'education_subject'=>$request->subjectName,
            'education_start_date'=>$request->educationstart,
            'education_end_date'=>$request->educationend,
            'cv_id'=>$cv->id,
        ]);
        return redirect()->back()->with('message','CV data has been saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(cv $cv)
    {
        return view('cvs.edit',compact('cv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,cv $cv)
    {
        // $request->validate();
        $validatedData = $request->validate([
            'firstname' =>'required|max:255',
            'lastname' => 'required|max:255',
            'address' => 'required|max:255',
            'zipcode' => 'required|max:255',
            'city' => 'required|max:255',
            'mobile' => 'required|max:25',
            'cv_email' => 'required|max:255',
            'birthday' => 'required',
            'nationality' => 'required|max:255',
        ]);
        $cv->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'address'=>$request->address,
            'zipcode'=>$request->zipcode,
            'city'=>$request->city,
            'phone'=>$request->phone,
            'mobile'=>$request->mobile,
            'cv_email'=>$request->cv_email,
            'birthday'=>$request->birthday,
            'nationality'=>$request->nationality,
            'language1'=>$request->language1,
            'language2'=>$request->language2,
            'language3'=>$request->language3,
            'profilesummary'=>$request->profilesummary,
            'technicalSkills'=>$request->technicalSkills,
            'personalInterest'=>$request->personalInterest
        ]);
        $work = cvs_work::firstWhere('cv_id',$cv->id);
        $work->update([
            'job_start_date'=>$request->jobstartdate,
            'job_end_date'=>$request->jobenddate,
            'job_title'=>$request->jobtitle,
            'company_name'=>$request->companyname,
            'job_location'=>$request->joblocation,
            'workdetails'=>$request->workdetails
        ]);
        $education = cvs_education::firstWhere('cv_id',$cv->id);
        $education->update([
            'education_institute'=>$request->educationalInstitute,
            'education_location'=>$request->educationCountry,
            'education_degree'=>$request->degreeName,
            'education_subject'=>$request->subjectName,
            'education_start_date'=>$request->educationstart,
            'education_end_date'=>$request->educationend
        ]);
        return redirect(route('cv.edit',$cv->id) )->with('message','Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(cv $cv)
    {
        // dd($cv);
        $cv->delete();
        return redirect(route('cv.index'))->with('message','Record Deleted!');
    }
}
