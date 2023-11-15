<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receta extends Model
{
    use HasFactory;
    protected $table = 'receta';
    protected $primaryKey = 'receta_id';

    public function medico()
    {
        return $this->hasMany(Medico::class, 'medico_id','medico_id');
    }
    public function medicamento()
    {
        return $this->belongsToMany(Medicamento::class, 'medicamento_id','medicamento_id');
    }
    public function paciente()
    {
        return $this->hasMany(Paciente::class, 'paciente_id','paciente_id');
    }
}