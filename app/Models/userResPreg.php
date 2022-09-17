<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userResPreg extends Model
{
    protected $table = 'userResPreg';

    protected $fillable = [
        'userRespuestas_id',
        'preguntas_id',
        'respuestas_id'
    ];
}
