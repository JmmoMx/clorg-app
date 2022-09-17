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
        Schema::create('usersPerfiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('comentario')->nullable();
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidoP')->nullable();
            $table->string('apellidoM')->nullable();
            $table->string('curp')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('usersPerfiles_id')->references('id')->on('usersPerfiles');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });

        Schema::create('perimisos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('edo')->default(1);
            $table->timestamps();
        });

        Schema::create('perimisosUsersPerfiles', function (Blueprint $table) {
            $table->foreignId('perimisos_id')->references('id')->on('perimisos');
            $table->foreignId('usersPerfiles_id')->references('id')->on('usersPerfiles');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('usersPerfiles');
        Schema::dropIfExists('perimisos');
        Schema::dropIfExists('perimisosUsersPerfiles');
    }
};
