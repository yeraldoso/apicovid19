<?php

namespace App\Http\Controllers\Api\Fallecido;

use App\Http\Controllers\ApiController;
use App\Models\Api\Fallecido;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FallecidoRegionFechaController extends ApiController
{


    public function show($region, $fecha)
    {

        try {
    		$fecha_modificada = Carbon::parse($fecha)->format("Y-m-d");
        } catch (\Exception $e ) {

            return $this->errorResponse("Formato de fecha no válida, debe ser en: 'dd-mm-aaaa' o 'aaaa-mm-dd'" , 400);
        }


		$fecha_modificada = Carbon::parse($fecha)->format("Y-m-d");

    	$fallecido = Fallecido::where("fecha", $fecha_modificada)->whereHas('region', function ($query) use ($region) {
													    $query->where('codigo', $region);
													})->firstOrFail();

	    return $this->showOne($fallecido);
    }

   
   
}
