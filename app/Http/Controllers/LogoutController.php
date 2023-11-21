<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function logout(){
        Session::flush();

        Auth::logout();
        return redirect()->route('home');
    }
}
