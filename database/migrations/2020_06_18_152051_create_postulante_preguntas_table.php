<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulantePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulante_preguntas', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('pregunta_id');
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
            $table->integer('postulante_id')->unsigned();
            $table->foreign('postulante_id')->references('id')->on('postulantes')->onDelete('cascade');
            $table->string('value');
            $table->string('text_value')->nullable();
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
        Schema::dropIfExists('postulante_preguntas');
    }
}
