<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acciones')->insert([
            'accion' => 'contestar encuesta',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('acciones')->insert([
            'accion' => 'crear',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('acciones')->insert([
            'accion' => 'eliminar',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('acciones')->insert([
            'accion' => 'editar',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('acciones')->insert([
            'accion' => 'consultar',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tablas')->insert([
            'nombre' => 'users',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'usersPerfiles',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'perimisos',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'perimisosUsersPerfiles',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'areas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'subAreas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'categoriaPersonal',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'logs',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'acciones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'tablas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'eventos',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'tipoRespuestas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'respuestas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'preguntas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'preguntasRespuestas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'userRespuestas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'genero',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'rangoEdad',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tablas')->insert([
            'nombre' => 'anosServicio',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
