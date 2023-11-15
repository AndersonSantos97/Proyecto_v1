<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class padecimiento extends Model
{
    use HasFactory;
    protected $table = 'padecimiento';
    protected $primaryKey = 'padecimiento_id';
    public $timestamps = true;
}