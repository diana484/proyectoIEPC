<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudadanos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('Apellido_paterno');
            $table->string('Apellido_materno');
            $table->string('sexo');
            $table->string('lada');
            $table->string('telefono');            
            $table->string('email')->unique();
            $table->string('distrito');
            $table->string('Municipio');
            $table->string('partido_politico'); //si o no
            $table->string('nombre_partido');
            $table->string('cargo');
            $table->string('clave'); //posible clave
            $table->String('folio'); //posible folio
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudadanos');
    }
}
