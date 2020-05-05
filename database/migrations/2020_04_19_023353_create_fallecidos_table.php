<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFallecidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fallecidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('codigo_region');
            $table->date('fecha');
            $table->integer('fallecidos')->unsigned();
            $table->integer('fallecidos_acumulados')->unsigned();
            $table->decimal('porcentaje_fallecidos', 16, 4);
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
        Schema::dropIfExists('fallecidos');
    }
}
