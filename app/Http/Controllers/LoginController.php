<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showed(Request $request){
        if(Auth::check()){

            return redirect()->route('home');
        }
        return view('users.login');
        //return view('users.showed')
    }
    
    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->route('users.login')->withErrors('auth.failed');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user){
        if($request->rol == 'm'){
            return redirect()->route('home');//redirigir a vista del medico
        }elseif($request->rol == 'p'){
            return redirect()->route('patient.menu');//redirigir a vista de paciente
        }else{
            return redirect()->route('home');//redirigir a la vista de la entidad
        }
        
    }


}
