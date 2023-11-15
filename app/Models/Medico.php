<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $table = 'medico';
    protected $primaryKey = 'medico_id';
    public $timestamps = true;

    public function cita()
    {
        return $this->hasMany(Cita::class, 'medico_id', 'medico_id');
    }
}
