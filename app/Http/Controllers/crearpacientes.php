<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;


class Creacion_Paciente extends Controller
{
    public function Mostrar_Pacientes()
    {
        return view('Creacion_Pacientes.crearpacientes');
    }


    public function Registro_Pacientes(Request $request)
    {
        $pacient = new pacient();
        $pacient->pacient_nom=$request->paci_nom;
        $pacient->pacient_ape=$request->paci_ape;
        $pacient->pacient_date=$request->paci_date;
        $pacient->pacient_adrs=$request->paci_adrs;
        $pacient->pacient_id=1;
        $pacient->pacient_id=1;

        $pacient->save();
    }

    
}