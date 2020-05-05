<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table 	= 'generos';
    protected $fillable = ['id', 'genero_corto','genero_largo'];
    protected $hidden   = [];
}
