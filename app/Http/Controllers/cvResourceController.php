<?php

namespace App\Http\Controllers;
use App\cv;
use Illuminate\Http\Request;
use App\Http\Requests\cvcreaterequest;
use Illuminate\Support\Facades\Validator;

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
        $cvs = cv::all();
        return view('cvs.index')->with(['cvs'=>$cvs]);
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
        // dd($request->all());
        cv::create($request->all());
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
    public function update(cvcreaterequest $request,cv $cv)
    {
        $request->validate();
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
