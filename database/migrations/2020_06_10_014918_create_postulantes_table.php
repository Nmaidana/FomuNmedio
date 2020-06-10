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
            $table->bigIncrements('id');
            $table->integer('ci');
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('sexo')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('telefono');
            $table->string('celular');
            $table->string('vivienda')->nullable();
            $table->string('profesion')->nullable();
            $table->string('lugar_trabajo');
            $table->integer('nflia');
            $table->integer('napte')->nullable();
            $table->integer('ingresof');
            $table->string('lugar_vivienda')->nullable();
            $table->integer('monto_apagar')->nullable();
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
