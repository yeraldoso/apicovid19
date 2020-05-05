<?php

use Illuminate\Http\Request;

Route::resource('regiones', 				'Api\Region\RegionController', 	 					['only'=>['index']] ); 

Route::resource('confirmados', 				'Api\Confirmado\ConfirmadoController', 	 			['only'=>['index']] ); 
Route::resource('confirmados/region', 		'Api\Confirmado\ConfirmadoRegionController', 	 	['only'=>['show']] ); 
Route::resource('confirmados/fecha', 		'Api\Confirmado\ConfirmadoFechaController', 	 	['only'=>['show']] ); 
Route::resource('confirmados/region.fecha', 'Api\Confirmado\ConfirmadoRegionFechaController', 	['only'=>['show']] ); 

Route::resource('fallecidos', 				'Api\Fallecido\FallecidoController', 	 			['only'=>['index']] ); 
Route::resource('fallecidos/region', 		'Api\Fallecido\FallecidoRegionController', 	 		['only'=>['show']] ); 
Route::resource('fallecidos/fecha', 		'Api\Fallecido\FallecidoFechaController', 	 		['only'=>['show']] ); 
Route::resource('fallecidos/region.fecha', 	'Api\Fallecido\FallecidoRegionFechaController', 	['only'=>['show']] ); 

Route::resource('grupoetario', 				'Api\GrupoEtario\GrupoEtarioController', 	 		['only'=>['index']] ); 
Route::resource('grupoetario/genero', 		'Api\GrupoEtario\GrupoEtarioGeneroController',		['only'=>['show']] ); 