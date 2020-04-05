<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistritacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distritacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clave_distrito');
            $table->string('cabecera_distrital');
            $table->string('clave_municipio');
            $table->string('municipio');
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
        Schema::dropIfExists('distritacions');
    }
}
