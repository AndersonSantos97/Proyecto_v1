<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //en el controller va la logica del negocio
    //se crea un controlador mediante el comando php artisan make:controller nombredelcontrolador
    //esto se debe hacer en la terminal, en mi caso uso la powershell
    public function login(){
        return view('users.login');
    }

    // public function registrarse(){
    //     return view('users.singup');
    // }

    // public function create(){
    //     //
    // }

    // public function show($user){
    //     return "This is the user with id {$user} from CONTROLLER";
    // }

    // public function edit($user){
    //     return "Now you can edit the user with id {$user} from CONTROLLER";
    // }

    // public function update(Request $request, $user){
    //     //
    // }

    // public function destroy($user){
    //     //
    // }



}
