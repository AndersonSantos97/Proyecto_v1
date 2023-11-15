<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $table = 'cita';
    protected $primaryKey = 'cita_id';
    public $timestamps = true;

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id', 'paciente_id');
    }

    public function medico(){
        return $this->belongsTo(Medico::class, 'medico_id','medico_id');
    }

}
