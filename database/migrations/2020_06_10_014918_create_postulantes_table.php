<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulantes', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('ci');
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('sexo')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('celular');
            $table->string('email');
            $table->string('vivienda_actual')->nullable();
            $table->string('trab_nombre')->nullable();
            $table->string('trab_direccion');
            $table->integer('integrante_fliar');
            $table->integer('numero_aport')->nullable();
            $table->integer('ingreso_fliar');
            $table->string('vivienda_deseada')->nullable();
            $table->string('cantidad_dor')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulantes');
    }
}
