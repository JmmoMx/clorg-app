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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->double('clave')->nullable();
            $table->integer('G_1')->nullable();
            $table->integer('G_2')->nullable();
            $table->integer('G_3')->nullable();
            $table->integer('G_4')->nullable();
            $table->integer('G_5')->nullable();
            $table->integer('G_6')->nullable();
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
        
        Schema::create('subAreas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->double('clave')->nullable();
            $table->integer('G_1')->nullable();
            $table->integer('G_2')->nullable();
            $table->integer('G_3')->nullable();
            $table->integer('G_4')->nullable();
            $table->integer('G_5')->nullable();
            $table->integer('G_6')->nullable();
            $table->foreignId('areas_id')->references('id')->on('areas');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });
        
        Schema::create('categoriaPersonal', function (Blueprint $table) {
            $table->id();
            $table->string('clave');
            $table->string('nombre')->nullable();
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
        Schema::dropIfExists('areas');
        Schema::dropIfExists('subAreas');
        Schema::dropIfExists('categoriaPersonal');
    }
};
