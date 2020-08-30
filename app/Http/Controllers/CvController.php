<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\cv;
class CvController extends Controller
{
    public function index()
    {
        return view ('cvs.index');
    }
    public function create()
    {
    return view ('cvs.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
    }
    public function edit()
    {
    return view ('cvs.edit');
    }

}
