<?php

namespace App\Http\Controllers\Api\GrupoEtario;

use App\Http\Controllers\ApiController;
use App\Models\Api\ConfirmadoGeneroEdad;
use Illuminate\Http\Request;

class GrupoEtarioController extends ApiController
{


    public function index()
    {
        $confirmados = ConfirmadoGeneroEdad::all();
        return $this->showAll($confirmados);
    }

}
