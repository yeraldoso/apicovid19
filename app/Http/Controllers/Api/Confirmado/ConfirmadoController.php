<?php

namespace App\Http\Controllers\Api\Confirmado;

use App\Http\Controllers\ApiController;
use App\Models\Api\CasoConfirmado;
use Illuminate\Http\Request;

class ConfirmadoController extends ApiController
{


    public function index()
    {
        $confirmados = CasoConfirmado::all();

        return $this->showAll($confirmados);        
    }


}
