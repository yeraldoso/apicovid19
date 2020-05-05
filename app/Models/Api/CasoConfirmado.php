<?php

namespace App\Models\Api;

use App\Models\Api\Region;
use App\Transformers\CasoConfirmadoTransformer;
use Illuminate\Database\Eloquent\Model;

class CasoConfirmado extends Model
{
    protected $table 	= 'casos_confirmados';
    protected $fillable = ['fecha', 'confirmados', 'confirmados_acumulados','porcentaje_confirmados','codigo_region'];
    protected $hidden   = ['created_at','updated_at','region'];
    protected $with     = ['region'];
    public $transformer = CasoConfirmadoTransformer::class;

    /*
    *
    Relaciones
    *
    */
    public function region()
    {
        return $this->hasOne(Region::class, 'codigo', 'codigo_region');
    }

    public static function getTasaContagio($confirmados_acumulados, $poblacion)
    {

        return number_format(($confirmados_acumulados / $poblacion)*100000, 12);
    }

}
