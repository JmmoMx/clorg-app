<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userRespuestas extends Model
{
    use HasFactory;

    protected $table = 'userRespuestas';

    protected $fillable = [
        'folioAtencion',
        'adscritoDir_id',
        'adscritoArea_id',
        'adscritoG_id',
        'apliEvDir_id',
        'apliEvArea_id',
        'apliEvG_id',
        'generos_id',
        'rangoEdad_id',
        'anosServicio_id',
        'discapacidades_id',
        'otraDicapacidad',
        'tiempoRealizado'
    ];
}
