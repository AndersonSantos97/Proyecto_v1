<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicoRequest;
use Auth;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function showed(){
        return view("inex");
    }

    public function login(MedicoRequest $request){
        $credentials = $request->getCredentials();

        if(Auth::validate($credentials)){
            return redirect()->route("users.login")->withErrors("auth.failed");

        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request,$user);
    }

    public function authenticated(Request $request,$user){
        return redirect()->route("home");
    }
}
