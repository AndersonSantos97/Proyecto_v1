<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Entidadmedica extends Model
{
    use HasFactory;
    protected $table = 'entidad_medica';
    protected $primaryKey = 'entidad_id';
    public $timestamps = true;

    public function medico()
    {
        return $this->belongsTo(Medico::class,'medico_id','medico_id');
    }
}