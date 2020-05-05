<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmadosGeneroEdadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmados_genero_edad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_genero')->unsigned();
            $table->bigInteger('id_rango_edad')->unsigned();
            $table->date('fecha');
            $table->integer('confirmados')->unsigned();
            $table->timestamps();

            $table->foreign('id_genero')->references('id')->on('generos');             
            $table->foreign('id_rango_edad')->references('id')->on('rangos_edad');             
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confirmados_genero_edad');
    }
}
