<?php

namespace App\Http\Controllers\Api\GrupoEtario;

use App\Http\Controllers\ApiController;
use App\Models\Api\ConfirmadoGeneroEdad;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class GrupoEtarioGeneroController extends ApiController
{


    public function show($genero)
    {

    	$confirmados = ConfirmadoGeneroEdad::whereHas('genero', function ($query) use ($genero) {
													    $query->where('genero_corto', $genero);
													})->get();    	

        if($confirmados->isEmpty()) { throw new ModelNotFoundException(); }

        return $this->showAll($confirmados);
    }

   
   
}
