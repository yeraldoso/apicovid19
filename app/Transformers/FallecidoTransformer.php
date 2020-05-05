<?php

namespace App\Transformers;

use App\Models\Api\Fallecido;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class FallecidoTransformer extends TransformerAbstract
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
    public function transform(Fallecido $fallecido)
    {
        return [
            'id'                            => $fallecido->id,
            'numero_region'                 => $fallecido->codigo_region,
            'nombre_region'                 => isset($fallecido->region->nombre) ? $fallecido->region->nombre : "-",
            'fecha'                         => Carbon::parse($fallecido->fecha)->format("d-m-Y"),
            'numero_fallecidos'             => $fallecido->fallecidos,
            'total_fallecidos'              => $fallecido->fallecidos_acumulados,
            'porcentaje_fallecidos_diario' => $fallecido->porcentaje_fallecidos,
        ];
    }
}
