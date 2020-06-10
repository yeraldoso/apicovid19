<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasosConfirmadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos_confirmados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('codigo_region');
            $table->date('fecha');
            $table->integer('confirmados');
            $table->integer('confirmados_acumulados')->unsigned();
            $table->decimal('porcentaje_confirmados', 8, 4);
            $table->timestamps();

            $table->foreign('codigo_region')->references('codigo')->on('regiones');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casos_confirmados');
    }
}
