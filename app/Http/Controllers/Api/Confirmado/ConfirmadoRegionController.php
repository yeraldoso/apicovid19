<?php

namespace App\Http\Controllers\Api\Confirmado;

use App\Http\Controllers\ApiController;
use App\Models\Api\CasoConfirmado;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ConfirmadoRegionController extends ApiController
{


    public function show($region)
    {

    	$confirmados_region = CasoConfirmado::whereHas('region', function ($query) use ($region) {
													    $query->where('codigo', $region);
													})->get();
        
        if($confirmados_region->isEmpty()) { throw new ModelNotFoundException(); }

        return $this->showAll($confirmados_region);
    }


}
