<?php

use App\Models\Api\Genero;
use App\Models\Api\RangoEdad;
use Illuminate\Database\Seeder;

class ApiRangoEdad_GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		DB::statement('SET FOREIGN_KEY_CHECKS = 0');


	   	$rangos_edades = [
				   		[
					        'rango' 	=> "00 - 04 años",
				   		],				   		
				   		[
					        'rango' 	=> "05 - 09 años",
				   		],				   		
				   		[
					        'rango' 	=> "10 - 14 años",
				   		],				   		
				   		[
					        'rango' 	=> "15 - 19 años",
				   		],				   		
				   		[
					        'rango' 	=> "20 - 24 años",
				   		],				   		
				   		[
					        'rango' 	=> "25 - 29 años",
				   		],				   		
				   		[
					        'rango' 	=> "30 - 34 años",
				   		],				   		
				   		[
					        'rango' 	=> "35 - 39 años",
				   		],				   		
				   		[
					        'rango' 	=> "40 - 44 años",
				   		],				   		
				   		[
					        'rango' 	=> "45 - 49 años",
				   		],				   		
				   		[
					        'rango' 	=> "50 - 54 años",
				   		],				   		
				   		[
					        'rango' 	=> "55 - 59 años",
				   		],				   		
				   		[
					        'rango' 	=> "60 - 64 años",
				   		],				   		
				   		[
					        'rango' 	=> "65 - 69 años",
				   		],				   		
				   		[
					        'rango' 	=> "70 - 74 años",
				   		],				   		
				   		[
					        'rango' 	=> "75 - 79 años",
				   		],				   		
				   		[
					        'rango' 	=> "80 y más años",
				   		],				   		
			    	];



	   	$generos = 	[
				   		[
					        'genero_corto' 	=> "M",
					        'genero_largo' 	=> "Masculino",
				   		],				   		
				   		[
					        'genero_corto' 	=> "F",
					        'genero_largo' 	=> "Femenino",
				   		],	   		
			    	];


		RangoEdad::truncate();
		Genero::truncate();

  		foreach ($rangos_edades as $rango_edad) 
  		{
  			DB::table('rangos_edad')->insert([ $rango_edad ]);
  		}  		

  		foreach ($generos as $genero) 
  		{
  			DB::table('generos')->insert([ $genero ]);
  		}





    }
}
