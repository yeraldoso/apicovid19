<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


trait ApiResponser
{

	protected function errorResponse($mensaje, $code)
	{
		return response()->json(['error' => $mensaje, 'code' => $code], $code);
	}

	//Muestra cuando el response es mas de un dato
	protected function showAll(Collection $collection, $code = 200 )
	{
		$collection = $this->trasnformaData($collection);
		// dd($collection);

		// return $this->successResponse(['data' => $collection], $code);
		return $this->successResponse($collection, $code);
	}


	//Muestra cuando solo la respuesta es un dato (o una instancia)
	protected function showOne(Model $instancia, $code = 200 )
	{
		$instancia = $this->trasnformaData($instancia);

		// return $this->successResponse(['data' => $instancia], $code);
		return $this->successResponse($instancia, $code);
	}


	protected function trasnformaData($collection)
	{
		$transformer = $collection->first()->transformer; //En el fondo aqui solo obtengo el espacio de nombres declarado en el modelo
		// dd($transformer);
		// dd($collection);
		$collection  = (is_null($transformer)) ? ['data' => $collection] : fractal($collection, new $transformer);
		// dd($collection);
		// $transformacion = fractal($data, new $transformer);
		return $collection;
	}


	// protected function transformData($data, $transformer)
	// {
	// 	// $transformer = $collection->first()->transformer; //En el fondo aqui solo obtengo el espacio de nombres declarado en el modelo
	// 	// $collection  = (is_null($transformer)) ? $collection : fractal($collection, new $transformer)->toArray();

	// 	$transformation = fractal($data, new $transformer);
	// 	return $transformation->toarray();
	// }

	private function successResponse($data, $code)
	{
		return response()->json($data, $code);
	}



}
