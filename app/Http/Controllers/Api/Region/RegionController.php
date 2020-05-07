<?php

namespace App\Http\Controllers\Api\Region;

use App\Http\Controllers\ApiController;
use App\Models\Api\Region;
use Illuminate\Http\Request;

class RegionController extends ApiController
{


    public function index()
    {
    	$regiones = Region::all();
    	dd($regiones);
        return $this->showAll($regiones);
    }

 

}
