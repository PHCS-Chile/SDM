<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    const PAUTA_MODIFICAR = 1;
    const PAUTA_CALIDAD = 2;

    protected $casts = [
        'detalles' => 'array'
    ];
}
