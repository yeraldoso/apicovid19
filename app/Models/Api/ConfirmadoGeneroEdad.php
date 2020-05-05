<?php

namespace App\Models\Api;

use App\Models\Api\Genero;
use App\Models\Api\RangoEdad;
use App\Transformers\ConfirmadoGeneroEdadTransformer;
use Illuminate\Database\Eloquent\Model;

class ConfirmadoGeneroEdad extends Model
{

    protected $table 	= 'confirmados_genero_edad';
    protected $fillable = ['id_genero', 'id_rango_edad', 'fecha', 'confirmados'];
    protected $hidden   = ['rangoEdad','genero', 'updated_at', 'created_at', 'id_genero', 'id_rango_edad'];
    protected $with     = ['genero','rangoEdad'];
    public $transformer = ConfirmadoGeneroEdadTransformer::class;



    /*
    *
    Relaciones
    *
    */
    public function genero()
    {
        return $this->hasOne(Genero::class, 'id', 'id_genero');
    }

    public function rangoEdad()
    {
    	return $this->hasOne(RangoEdad::class, 'id', 'id_rango_edad');
    }


}
