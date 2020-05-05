<?php

namespace App\Models\Api;

use App\Models\Api\Region;
use App\Transformers\FallecidoTransformer;
use Illuminate\Database\Eloquent\Model;

class Fallecido extends Model
{

    protected $table 	= 'fallecidos';
    protected $fillable = ['codigo_region', 'fecha', 'fallecidos', 'fallecidos_acumulados','porcentaje_fallecidos'];
    protected $hidden   = ['created_at','updated_at','region'];
    protected $with     = ['region'];
    public $transformer = FallecidoTransformer::class;

    /*
    *
    Relaciones
    *
    */
    public function region()
    {
        return $this->hasOne(Region::class, 'codigo', 'codigo_region');
    }

}
