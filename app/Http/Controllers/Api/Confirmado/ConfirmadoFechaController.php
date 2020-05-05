<?php

namespace App\Http\Controllers\Api\Confirmado;

use App\Http\Controllers\ApiController;
use App\Models\Api\CasoConfirmado;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ConfirmadoFechaController extends ApiController
{


    public function show($fecha)
    {

        try {
    		$fecha_modificada = Carbon::parse($fecha)->format("Y-m-d");
        } catch (\Exception $e ) {

            return $this->errorResponse("Formato de fecha no válida, debe ser en: 'dd-mm-aaaa' o 'aaaa-mm-dd'" , 400);
        }

		$confirmados_fecha = CasoConfirmado::where('fecha', $fecha_modificada)->get();

        if($confirmados_fecha->isEmpty()) { throw new ModelNotFoundException(); }

	    return $this->showAll($confirmados_fecha);
    }

 
}
