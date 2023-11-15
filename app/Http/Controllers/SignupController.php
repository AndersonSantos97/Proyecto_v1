<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup(){
        return view("users.signup");
    }

    public function create(request $request){
        //return $request->all();
        
    }
}
