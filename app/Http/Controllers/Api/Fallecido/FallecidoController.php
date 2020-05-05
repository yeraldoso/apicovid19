<?php

namespace App\Http\Controllers\Api\Fallecido;

use App\Http\Controllers\ApiController;
use App\Models\Api\Fallecido;
use Illuminate\Http\Request;

class FallecidoController extends ApiController
{


    public function index()
    {
    	$fallecidos = Fallecido::all();
        return $this->showAll($fallecidos);
    }

   

}
