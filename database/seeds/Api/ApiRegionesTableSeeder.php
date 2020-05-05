<?php

use App\Models\Api\Region;
use Illuminate\Database\Seeder;

class ApiRegionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

	   	$regiones = [
				   		[
					        'codigo'	=> 15,
					        'nombre' 	=> "Arica y Parinacota",
					        'poblacion' => 252110,
				   		],
				   		[
				        	'codigo'	=> 1,
					        'nombre' 	=> "Tarapacá",
					        'poblacion' => 382773,
				   		],
				   		[
				        	'codigo'	=> 2,
					        'nombre' 	=> "Antofagasta",
					        'poblacion' => 691854,
				   		],
				   		[
				        	'codigo'	=> 3,
					        'nombre' 	=> "Atacama",
					        'poblacion' => 314709,
				   		],
				   		[
				        	'codigo'	=> 4,
					        'nombre' 	=> "Coquimbo",
					        'poblacion' => 836096,
				   		],
				   		[
				        	'codigo'	=> 5,
					        'nombre' 	=> "Valparaíso",
					        'poblacion' => 1960170,
				   		],
				   		[
				        	'codigo'	=> 13,
					        'nombre' 	=> "Metropolitana",
					        'poblacion' => 8125072,
				   		],
				   		[
				        	'codigo'	=> 6,
					        'nombre' 	=> "O’Higgins",
					        'poblacion' => 991063,
				   		],
				   		[
				        	'codigo'	=> 7,
					        'nombre' 	=> "Maule",
					        'poblacion' => 1131939,
				   		],
				   		[
				        	'codigo'	=> 16,
					        'nombre' 	=> "Ñuble",
					        'poblacion' => 511551,
				   		],
				   		[
				        	'codigo'	=> 8,
					        'nombre' 	=> "Biobío",
					        'poblacion' => 1663696,
				   		],
				   		[
				        	'codigo'	=> 9,
					        'nombre' 	=> "Araucanía",
					        'poblacion' => 1014343,
				   		],
				   		[
				        	'codigo'	=> 14,
					        'nombre' 	=> "Los Ríos",
					        'poblacion' => 405835,
				   		],
				   		[
				        	'codigo'	=> 10,
					        'nombre' 	=> "Los Lagos",
					        'poblacion' => 891440,
				   		],
				   		[
				        	'codigo'	=> 11,
					        'nombre' 	=> "Aysén",
					        'poblacion' => 107297,
				   		],
				   		[
				        	'codigo'	=> 12,
					        'nombre' 	=> "Magallanes",
					        'poblacion' => 178362,
				   		],
				    ];

		Region::truncate();

  		foreach ($regiones as $region) {
  			DB::table('regiones')->insert([ $region ]);
  		}
    }
}
