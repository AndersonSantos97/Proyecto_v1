<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patient(){
        $pacientes = Paciente::all();
        dd($pacientes);
        return view("index",["pacientes"=>$pacientes]);
        //echo "vista de paciente";
    }
    
    public function store(Request $request){
        //funcion creada para guardar los datos del cliente que
        //provienen de la pantalla de signup
        //BUSCAR LA FORMA DE QUE EL SPLIT NO SE HAGA EN AQPELLIDOS COMPUESTOS
        $patient = new Paciente();
        
        //se hace un split del nombre para poder guardar el nombre en campos separados
        $nombres = explode(" ",$request->txtname);
        $exceptions = ["DE", "LA", "DEL", "LOS", "SAN", "SANTA"];
        
        //encriptamos la password
        $psswd= bcrypt($request->txtpassword);

        $patient->primer_nombre = str($nombres[0]);
        $patient->segundo_nombre = str($nombres[1]);
        $patient->primer_apellido = str($nombres[2]);
        $patient->segundo_apellido = str($nombres[3]);
        $patient->direccion = "";
        $patient->fecha_nacimiento = date("Y-m-d");
        $patient->estad_civil = "s";
        $patient->sexo = "m";
        $patient->dni = $request->txtdni;
        $patient->telefono = $request->txtcel;
        $patient->email = $request->txtemail;
        $patient->password = $psswd;
        $patient->fecha_registro = date("Y-m-d");

        $datos = array(
            'name'=> $request->txtname,
            'email'=> $request->txtemail,
            'password'=> $psswd
        );

        $result = self::user($datos);
        if ($result) {
            $patient->save();
            return redirect()->route('users.showed');
        }else{
            return redirect()->route('users.signup')->withErrors('auth.failed');
        }
        
    }

    public function user($args){
        $user = new User();

        $user->name = $args['name'];
        $user->email = $args['email'];
        $user->password = $args['password'];
        $user->rol = 'p';

        $result = $user->save();
        return $result;
    }

    public function search($id){
        
    }

}
