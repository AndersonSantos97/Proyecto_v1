<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'paciente';
    protected $primaryKey = 'paciente_id';
    public $timestamps = true;

    public function cita()
    {
        return $this->hasMany(Cita::class, 'paciente_id','paciente_id');
    }
    public function receta()
    {
        return $this->hasMany(Receta::class, 'paciente_id','paciente_id');
    }
}