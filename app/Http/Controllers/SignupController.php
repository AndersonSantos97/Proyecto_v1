<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class SignupController extends Controller
{
    public function signup(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view("users.signup");
    }

    public function signupv2(){
        return view("users.signupuser");
    }

    public function create(request $request){
        //return $request->all();
        
    }

    public function storeUser(RegisterRequest $request){
        $user = User::create($request->validated());
        return true;
    }
}
