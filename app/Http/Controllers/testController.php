<?php

namespace App\Http\Controllers;

use App\Models\Api\CasoConfirmado;
use App\Models\Api\ConfirmadoGeneroEdad;
use App\Models\Api\Fallecido;
use App\Models\Api\Genero;
use App\Models\Api\RangoEdad;
use App\Models\Api\Region;
use Carbon\Carbon;
use Illuminate\Http\Request;

class testController extends Controller
{

    public function errorResponse($mensaje, $code)
    {
        return response()->json(['errorsillo' => $mensaje, 'code' => $code], $code);
    }

    public function index()
    {



        // $fechas_array    = $this->getFechaAarray("2020-03-03", Carbon::now()->subDay(1));
        // $links_array_p4  = $this->getLinkAarrayProducto4($fechas_array);
        // $this->storeCasosConfirmados($links_array_p4);


        // $fechas_array    = $this->getFechaAarray("2020-03-22", Carbon::now()->subDay(1));
        // $links_array_p4  = $this->getLinkAarrayProducto4($fechas_array);
        // $this->storeFallecidos($links_array_p4);


        // $link_p16 = "https://raw.githubusercontent.com/MinCiencia/Datos-COVID19/master/output/producto16/CasosGeneroEtario.csv";
        // $this->storeGeneroEtario($link_p16);


        // dd("....Finalizado.... :)");
    }



    //Funcion que devuelve un array de fechas, si rango es true considera desde el dia 03/03/2020
    // public function getFechaAarray($fecha_inicial, $fecha_final)
    // {
    //     $fecha_inicial  = Carbon::parse($fecha_inicial)->subDay();
    //     $fecha_final    = Carbon::parse($fecha_final)->subDay();

    //     $diferencia_dias = $fecha_inicial->diffInDays($fecha_final);

    //     for ($i=0; $i<=$diferencia_dias ; $i++)
    //     {
    //         $arrayFechas[] = $fecha_inicial->addDay()->format("Y-m-d");
    //     }

    //     return $arrayFechas;
    // }




    // //Construte un array de links a partir de un array de fechas
    // public function getLinkAarrayProducto4($fechas)
    // {
    //     $links_array = [];
    //     foreach ($fechas as $key => $fecha) {
    //         $links_array[$key]["link"] = "https://raw.githubusercontent.com/MinCiencia/Datos-COVID19/master/output/producto4/".$fecha."-CasosConfirmados-totalRegional.csv";
    //         $links_array[$key]["fecha"]= $fecha;
    //     }
    //     return $links_array;
    // }


    // public function storeCasosConfirmados($links_array_p4)
    // {
    //     //Borra la BD
    //     CasoConfirmado::truncate();


    //     foreach ($links_array_p4 as $link) 
    //     {
    //         $archivo = file($link["link"]);
    //         $totales = explode(",", $archivo[count($archivo)-1]);

    //         foreach ($archivo as  $fila) 
    //         {
    //             $fila_array = explode(',', $fila);
    //             $region     = Region::where('nombre', $fila_array[0])->first();

    //             if (!is_null($region) or 
    //                                     $fila_array[0]=="Arica y Paricota" or $fila_array[0]=="Arica  y  Parinacota" or
    //                                     $fila_array[0]=="Tarapaca" or 
    //                                     $fila_array[0]=="Valparaiso" or 
    //                                     $fila_array[0]=="Metropolita" or 
    //                                     $fila_array[0]=="O'Higgins" or 
    //                                     $fila_array[0]=="Nuble" or
    //                                     $fila_array[0]=="Biobio" or
    //                                     $fila_array[0]=="Araucania" or
    //                                     $fila_array[0]=="Los  Ríos" or $fila_array[0]=="Los  Rios" or
    //                                     $fila_array[0]=="Los  Lagos" or
    //                                     $fila_array[0]=="Aysen"
    //                 ) 
    //             {

    //                 $confirmados     = isset($fila_array[1]) ? $fila_array[1] : null;
    //                 $confirmados_acu = isset($fila_array[2]) ? $fila_array[2] : null;
    //                 $fecha           = $link["fecha"];
    //                 $porc_confirmado = isset($totales[2]) ? (100 * $confirmados_acu) / $totales[2] : 0;

    //                 //Almacena codigo region segun los errores
    //                 switch ($fila_array[0]) 
    //                 {
    //                     case "Arica y Paricota":    $codigo_region = 15; break;
    //                     case "Arica  y  Parinacota":$codigo_region = 15; break;
    //                     case "Tarapaca":            $codigo_region = 1; break;
    //                     case "Valparaiso":          $codigo_region = 5; break;
    //                     case "Metropolita":         $codigo_region = 13; break;
    //                     case "O'Higgins":           $codigo_region = 6; break;
    //                     case "Nuble":               $codigo_region = 16; break;
    //                     case "Biobio":              $codigo_region = 8; break;
    //                     case "Araucania":           $codigo_region = 9; break;
    //                     case "Los  Ríos":           $codigo_region = 14; break;
    //                     case "Los  Rios":           $codigo_region = 14; break;
    //                     case "Los  Lagos":          $codigo_region = 10; break;
    //                     case "Aysen":               $codigo_region = 11; break;
    //                     default:                    $codigo_region = $region->codigo ;
    //                 }

    //                 // Almacena en la BD
    //                 $caso = new CasoConfirmado;
    //                 $caso->codigo_region          =  $codigo_region; 
    //                 $caso->fecha                  =  $fecha; 
    //                 $caso->confirmados            =  $confirmados; 
    //                 $caso->confirmados_acumulados =  $confirmados_acu; 
    //                 $caso->porcentaje_confirmados =  round( $porc_confirmado, 4);
    //                 $caso->save(); 

    //                 // print_r($fila_array[0].": ".$confirmados." ".$confirmados_acu." ".$porc_confirmado."% ".$fecha." ".$codigo_region );
    //                 // echo("<br>");
    //             }

    //         }
    //         // echo("<br>");
    //         // echo("<br>");
    //     }
    //     echo "Confirmados listo! <br>";
    // }


    // public function storeFallecidos($links_array_p4)
    // {
    //     //Borra la BD
    //     Fallecido::truncate();

    //     foreach ($links_array_p4 as $link) 
    //     {
    //         $archivo = file($link["link"]);
    //         $totales = explode(",", $archivo[count($archivo)-1]);

    //         foreach ($archivo as  $fila) 
    //         {
    //             $fila_array = explode(',', $fila);
    //             $region     = Region::where('nombre', $fila_array[0])->first();

    //             if (!is_null($region) or 
    //                                     // $fila_array[0]=="Arica y Paricota" or $fila_array[0]=="Arica  y  Parinacota" or
    //                                     // $fila_array[0]=="Metropolita" or 
    //                                     // $fila_array[0]=="O'Higgins" or 
    //                                     // $fila_array[0]=="Nuble" or
    //                                     // $fila_array[0]=="Los  Ríos" or $fila_array[0]=="Los  Rios" or
    //                                     // $fila_array[0]=="Los  Lagos"
    //                                     $fila_array[0]=="Arica y Paricota" or $fila_array[0]=="Arica  y  Parinacota" or
    //                                     $fila_array[0]=="Tarapaca" or 
    //                                     $fila_array[0]=="Valparaiso" or 
    //                                     $fila_array[0]=="Metropolita" or 
    //                                     $fila_array[0]=="O'Higgins" or 
    //                                     $fila_array[0]=="Nuble" or
    //                                     $fila_array[0]=="Biobio" or
    //                                     $fila_array[0]=="Araucania" or
    //                                     $fila_array[0]=="Los  Ríos" or $fila_array[0]=="Los  Rios" or
    //                                     $fila_array[0]=="Los  Lagos" or
    //                                     $fila_array[0]=="Aysen"
    //                 ) 
    //             {


    //                 //Almacena codigo region segun los errores
    //                 switch ($fila_array[0]) 
    //                 {
    //                     // case "Arica y Paricota":    $codigo_region = 15; break;
    //                     // case "Arica  y  Parinacota":$codigo_region = 15; break;
    //                     // case "Metropolita":         $codigo_region = 13; break;
    //                     // case "O'Higgins":           $codigo_region = 6; break;
    //                     // case "Nuble":               $codigo_region = 16; break;
    //                     // case "Los  Ríos":           $codigo_region = 14; break;
    //                     // case "Los  Rios":           $codigo_region = 14; break;
    //                     // case "Los  Lagos":          $codigo_region = 10; break;
    //                     // default:                    $codigo_region = $region->codigo ;
    //                     case "Arica y Paricota":    $codigo_region = 15; break;
    //                     case "Arica  y  Parinacota":$codigo_region = 15; break;
    //                     case "Tarapaca":            $codigo_region = 1; break;
    //                     case "Valparaiso":          $codigo_region = 5; break;
    //                     case "Metropolita":         $codigo_region = 13; break;
    //                     case "O'Higgins":           $codigo_region = 6; break;
    //                     case "Nuble":               $codigo_region = 16; break;
    //                     case "Biobio":              $codigo_region = 8; break;
    //                     case "Araucania":           $codigo_region = 9; break;
    //                     case "Los  Ríos":           $codigo_region = 14; break;
    //                     case "Los  Rios":           $codigo_region = 14; break;
    //                     case "Los  Lagos":          $codigo_region = 10; break;
    //                     case "Aysen":               $codigo_region = 11; break;
    //                     default:                    $codigo_region = $region->codigo ;
    //                 }



    //                 $bandera = true;
    //                 if($link["fecha"] == "2020-04-16")
    //                 {
    //                     $bandera = false;
    //                     $totales         = explode(",", $archivo[count($archivo)-2]);

    //                     $fecha           = $link["fecha"];
    //                     $fallecidos      = 0;
    //                     $fallecidos_acu  = isset($fila_array[4]) ? (int) trim($fila_array[4])  : null;
    //                     $porc_fallecidos = isset($totales[4]) ? (100 * $fallecidos_acu) / (int)$totales[4] : 0;
    //                 }


    //                 if (count($totales) == 4) 
    //                 {
    //                     $fecha           = $link["fecha"];
    //                     $fallecidos      = 0;
    //                     $fallecidos_acu  = isset($fila_array[3]) ? (int) trim($fila_array[3])  : null;
    //                     $porc_fallecidos = isset($totales[3]) ? (100 * $fallecidos_acu) / (int)$totales[3] : 0;
    //                 }


    //                 if(count($totales) == 5 and $bandera)
    //                 {
    //                     $fecha           = $link["fecha"];
    //                     $fallecidos      = 0;
    //                     $fallecidos_acu  = isset($fila_array[4]) ? (int) trim($fila_array[4])  : null;
    //                     $porc_fallecidos = isset($totales[4]) ? (100 * $fallecidos_acu) / (int)$totales[4] : 0;
    //                 }

    //                 //solo el 29-04-2020
    //                 if (count($totales) == 9 or count($totales) == 7) 
    //                 {
    //                     $fecha           = $link["fecha"];
    //                     $fallecidos      = 0;
    //                     $fallecidos_acu  = isset($fila_array[5]) ? (int) trim($fila_array[5])  : null;
    //                     $porc_fallecidos = isset($totales[5]) ? (100 * $fallecidos_acu) / (int)$totales[5] : 0;
    //                 }


    //                 // Almacena en la BD
    //                 $fallecido = new Fallecido;
    //                 $fallecido->codigo_region         =  $codigo_region; 
    //                 $fallecido->fecha                 =  $fecha; 
    //                 $fallecido->fallecidos            =  $fallecidos; 
    //                 $fallecido->fallecidos_acumulados =  $fallecidos_acu; 
    //                 $fallecido->porcentaje_fallecidos =  round( $porc_fallecidos, 4);
    //                 $fallecido->save(); 

    //                 // print_r($fila_array[0].": ".$fallecidos." ".$fallecidos_acu." ".$porc_fallecidos."% ".$fecha." ".$codigo_region );
    //                 // echo("<br>");
    //             }//if

    //         }//for
            
    //         // echo("<br>");
    //         // echo("<br>");
    //     }

    //     //Guarda los fallecidos
    //     $this->storeCampoFallecido($links_array_p4);
    //     echo "Fallecidos listo! <br>";
    // }



    // public function storeCampoFallecido($links_array_p4)
    // {
    //     $fechas = [];
    //     // dd($links_array_p4);
    //     foreach ($links_array_p4 as $link) 
    //     {
    //         $fechas[] = $link["fecha"];
    //     }

    //     $id_regiones    = Region::all()->pluck("codigo")->toarray();
    //     $fecha_inicial  = $fechas[0];
    //     $fechas         = array_reverse($fechas); 


    //     foreach ($fechas as $key => $fecha) 
    //     {
    //         foreach ($id_regiones as $id) {
    //             if ($fecha == $fecha_inicial)
    //             {
    //                 $fallecido = Fallecido::where("codigo_region", $id)->where("fecha", $fecha)->first();
    //                 $fallecido->fallecidos  =  $fallecido->fallecidos_acumulados; 
    //                 $fallecido->save(); 

    //             }else{

    //                 $key_anterior   = $key+1;
    //                 $fecha_anterior = $fechas[$key_anterior]; 

    //                 $fallecido_actual   = Fallecido::where("codigo_region", $id)->where("fecha", $fecha)->first();
    //                 $fallecido_anterior = Fallecido::where("codigo_region", $id)->where("fecha", $fecha_anterior)->first();


    //                 $fallecido = $fallecido_actual->fallecidos_acumulados - $fallecido_anterior->fallecidos_acumulados;
    //                 $fallecido_actual->fallecidos  =  $fallecido; 
    //                 $fallecido_actual->save(); 
    //             }                
    //         }
    //     }
    // }




    // public function storeGeneroEtario($link_p16)
    // {

    //     //Borra la BD
    //     ConfirmadoGeneroEdad::truncate();


    //     $archivo = file($link_p16);

    //     $header_file       = explode(',', $archivo[0]);
    //     $cantidad_columnas = count($header_file); 
    //     $columna_actual = 2;

    //     for ($columna_actual; $columna_actual<$cantidad_columnas; $columna_actual++) 
    //     {
    //         $fecha = trim($header_file[$columna_actual]);

    //         foreach ($archivo as $fila) 
    //         {
    //             $fila_split = explode(',', $fila);

    //             $rango_edad  = isset($fila_split[0]) ? $fila_split[0] : "sin rango";
    //             $genero      = isset($fila_split[1]) ? $fila_split[1] : "sin genero";
    //             $confirmados = isset($fila_split[$columna_actual]) ? trim($fila_split[$columna_actual]) : "sin numero";
                            
    //             $rango_valido = RangoEdad::where("rango", $rango_edad)->first();
    //             $genero_valido = Genero::where("genero_corto", $genero)->first();

    //             if (!is_null($rango_valido) and  !is_null($genero_valido)) 
    //             {
    //                 $fallecido = new ConfirmadoGeneroEdad;
    //                 $fallecido->id_rango_edad   =  $rango_valido->id; 
    //                 $fallecido->id_genero       =  $genero_valido->id; 
    //                 $fallecido->fecha           =  $fecha; 
    //                 $fallecido->confirmados     =  $confirmados; 
    //                 $fallecido->save(); 
    //             }
    //         } 
    //     }
    //     echo "Genero Etario listo! <br>";
    // }








}
