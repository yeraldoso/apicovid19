<?php

namespace App\Http\Controllers\Api\Fallecido;

use App\Http\Controllers\ApiController;
use App\Models\Api\Fallecido;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class FallecidoRegionController extends ApiController
{


    public function show($region)
    {
    	$fallecidos_region = Fallecido::whereHas('region', function ($query) use ($region) {
													    $query->where('codigo', $region);
													})->get();

        if($fallecidos_region->isEmpty()) { throw new ModelNotFoundException(); }

        return $this->showAll($fallecidos_region);
    }

   
}
