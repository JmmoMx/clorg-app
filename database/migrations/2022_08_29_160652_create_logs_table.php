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
        
        Schema::create('acciones', function (Blueprint $table) {
            $table->id();
            $table->string('accion');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
        
        
        Schema::create('tablas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
        
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accion_id')->references('id')->on('acciones');
            $table->foreignId('tablas_id')->references('id')->on('tablas');
            $table->string('observaciones')->nullable();
            $table->boolean('edo')->default(1);
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
        Schema::dropIfExists('logs');
        Schema::dropIfExists('acciones');
        Schema::dropIfExists('tablas');
    }
};
