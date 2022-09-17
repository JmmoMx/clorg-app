<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->Time('tiempoRealizado')->nullable();
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
        Schema::create('rangoEdad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
        Schema::create('anosServicio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
        
        Schema::create('tipoRespuestas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
        
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('tipo_id')->references('id')->on('tipoRespuestas');
            $table->foreignId('evento_id')->references('id')->on('eventos');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
        
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('posicion');
            $table->foreignId('evento_id')->references('id')->on('eventos');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });

        Schema::create('preguntasRespuestas', function (Blueprint $table) {
            $table->id();   
            $table->foreignId('preguntas_id')->references('id')->on('preguntas');
            $table->foreignId('respuestas_id')->references('id')->on('respuestas');
            $table->string('comentario')->nullable();
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
       
        Schema::create('discapacidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('comentario')->nullable();
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });

        Schema::create('userRespuestas', function (Blueprint $table) {
            $table->id();
            $table->string('folioAtencion')->nullable();

            $table->foreignId('adscritoDir_id')->references('id')->on('areas');
            $table->foreignId('adscritoArea_id')->references('id')->on('subAreas');
            $table->foreignId('apliEvDir_id')->references('id')->on('areas');
            $table->foreignId('apliEvArea_id')->references('id')->on('subAreas');
            $table->foreignId('apliEvG_id')->references('id')->on('categoriaPersonal');

            $table->foreignId('generos_id')->references('id')->on('generos');
            $table->foreignId('rangoEdad_id')->references('id')->on('rangoEdad');
            $table->foreignId('anosServicio_id')->references('id')->on('anosServicio');
            $table->foreignId('discapacidades_id')->references('id')->on('discapacidades');
            $table->string('otraDicapacidad')->nullable();

            $table->dateTime('tiempoRealizado')->nullable();
            $table->boolean('edo')->default(0);
            $table->timestamps();
        });

        Schema::create('userResPreg', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userRespuestas_id')->references('id')->on('userRespuestas');
            $table->foreignId('preguntas_id')->references('id')->on('preguntas');
            $table->foreignId('respuestas_id')->references('id')->on('respuestas');
            $table->string('comentario')->nullable();
            $table->boolean('edo')->default(0);
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
        Schema::dropIfExists('eventos');
        Schema::dropIfExists('tipoRespuestas');
        Schema::dropIfExists('respuestas');
        Schema::dropIfExists('preguntas');
        Schema::dropIfExists('preguntasRespuestas');
        Schema::dropIfExists('userRespuestas');
        Schema::dropIfExists('generos');
        Schema::dropIfExists('rangoEdad');
        Schema::dropIfExists('anosServicio');
        Schema::dropIfExists('userResPreg');

    }
};
