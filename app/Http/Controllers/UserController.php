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
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            User::find(1)->update(['avatar'=>$filename]);
        }
        return redirect()->back();
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
