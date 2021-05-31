<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Respuesta
 * @package App\Models
 * @version 1
 */
class Respuesta extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    const CENTRO = 1;
    const PH = 2;
    const ICI = 3;

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class);
    }

    public function atributo()
    {
        return $this->belongsTo(Atributo::class);
    }

}
