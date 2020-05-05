<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class RangoEdad extends Model
{
    protected $table 	= 'rangos_edad';
    protected $fillable = ['id', 'rango'];
    protected $hidden   = [];
}
