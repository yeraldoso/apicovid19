<?php

namespace App\Transformers;

use App\Models\Api\CasoConfirmado;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class CasoConfirmadoTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(CasoConfirmado $casoConfirmado)
    {
        $poblacion = isset($casoConfirmado->region->poblacion) ? $casoConfirmado->region->poblacion : 1;

        return [
            'id'                       => $casoConfirmado->id,
            'numero_region'            => $casoConfirmado->codigo_region,
            'nombre_region'            => isset($casoConfirmado->region->nombre) ? $casoConfirmado->region->nombre : "-",
            'poblacion_total'          => $poblacion,  
            'fecha'                    => Carbon::parse($casoConfirmado->fecha)->format("d-m-Y"),
            'numero_confirmados'       => $casoConfirmado->confirmados,
            'total_confirmados'        => $casoConfirmado->confirmados_acumulados,
            'porcentaje_casos_diarios' => $casoConfirmado->porcentaje_confirmados,
            'tasa_total_confirmados'   => CasoConfirmado::getTasaContagio($casoConfirmado->confirmados_acumulados, $poblacion), 
        ];
    }
}
