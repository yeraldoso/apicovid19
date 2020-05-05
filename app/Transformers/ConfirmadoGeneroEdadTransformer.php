<?php

namespace App\Transformers;

use App\Models\Api\ConfirmadoGeneroEdad;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class ConfirmadoGeneroEdadTransformer extends TransformerAbstract
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
    public function transform(ConfirmadoGeneroEdad $confirmadoGeneroEdad)
    {
        return [
            'id'                 => $confirmadoGeneroEdad->id,
            'genero'             => $confirmadoGeneroEdad->genero->genero_corto,
            'genero_largo'       => $confirmadoGeneroEdad->genero->genero_largo,
            'rango_etario'       => $confirmadoGeneroEdad->rangoEdad->rango,
            'fecha'              => Carbon::parse($confirmadoGeneroEdad->fecha)->format("d-m-Y"),
            'numero_confirmados' => $confirmadoGeneroEdad->confirmados,
        ];
    }
}
