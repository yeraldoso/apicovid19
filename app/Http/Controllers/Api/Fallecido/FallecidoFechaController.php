<?php

namespace App\Http\Controllers\Api\Fallecido;

use App\Http\Controllers\ApiController;
use App\Models\Api\Fallecido;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class FallecidoFechaController extends ApiController
{


    public function show($fecha)
    {

        try {
    		$fecha_modificada = Carbon::parse($fecha)->format("Y-m-d");
        } catch (\Exception $e ) {

            return $this->errorResponse("Formato de fecha no válida, debe ser en: 'dd-mm-aaaa' o 'aaaa-mm-dd'" , 400);
        }


		$fecha_modificada = Carbon::parse($fecha)->format("Y-m-d");
		$fallecidos_fecha = Fallecido::where('fecha', $fecha_modificada)->get();
		
        if($fallecidos_fecha->isEmpty()) { throw new ModelNotFoundException(); }
        
	    return $this->showAll($fallecidos_fecha);

    }

 
 
}
