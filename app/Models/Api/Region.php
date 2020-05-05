<?php

namespace App\Models\Api;

use App\Transformers\RegionTransformer;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $transformer = RegionTransformer::class;

    protected $table 	= 'regiones';
    protected $fillable = ['codigo', 'nombre', 'poblacion'];
    protected $hidden   = ['created_at','updated_at','poblacion'];

}
