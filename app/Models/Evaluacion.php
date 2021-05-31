<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluacion
 * @package App\Models
 * @version 1
 */
class Evaluacion extends Model
{
    protected $guarded = ['id'];
    use HasFactory;



    public function asignacion()
    {
        return $this->belongsTo(Asignacion::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class);
    }

}
