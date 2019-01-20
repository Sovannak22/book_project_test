<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
use Auth;

class UserProfileController extends Controller
{
/**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $user = Auth::user();
        return view('profile')->with('user',$user);
    }

    public function updateprofile(Request $request){
        if ($request->hasFile('profile-img')){
            $profileImg = $request->file('profile-img');
            $fileName = time().'.'.$profileImg->getClientOriginalExtension();
            Image::make($profileImg)->resize(150,150)->save(public_path('/storage/profile_img/'.$fileName));
            $user=Auth::user();
            $user->img = $fileName;
            $user->save();
        }
        return view('profile')->with('user',$user); 
    }
}
