<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadProfilePicController extends Controller
{
    public function uploadPic(){
        return view('/auth/upload_profile');
    }
}
