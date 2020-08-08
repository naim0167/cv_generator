<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Image Uploaded!');
        }
        return redirect()->back()->with('error', 'Image not Uploaded!');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('home');
    }

}
