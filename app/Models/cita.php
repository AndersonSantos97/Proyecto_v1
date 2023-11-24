<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Cita extends Model
{
    
    static $rules = [
		'paciente_id' => 'required',
		'paciente_dni' => 'required',
		'medico_id' => 'required',
		'fecha_concertada' => 'required',
		'hora_concertada' => 'required',
		'examenes_previos' => 'required',
    ];

    protected $perPage = 20;

   
    protected $fillable = ['paciente_id','paciente_dni','medico_id','fecha_concertada','hora_concertada','examenes_previos'];


   
    public function historialConsultas()
    {
        return $this->hasMany('App\Models\HistorialConsulta', 'cita_id', 'id');
    }
    
   
    public function medico()
    {
        return $this->hasOne('App\Models\Medico', 'id', 'medico_id');
    }
    
  
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'paciente_id');
    }
    

}
