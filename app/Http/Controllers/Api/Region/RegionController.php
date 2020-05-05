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
        return $this->showAll($regiones);
    }

 

}
