<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup(Request $request){
        return view("users.singup");
    }
}
