<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluacion
 * @package App\Models
 * @version 2 (25/06/2021)
 */
class Evaluacion extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    //protected $dateFormat = 'd-m-Y H:i:s';

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

    public function estaCompleta()
    {
        return $this->estado_id > 1 && $this->estado_id < 6;
    }


//    protected $casts = [
//        'created_at' => 'datetime:d-m-Y H:i:s',
//        'updated_at' => 'datetime:d-m-Y H:i:s',
//    ];

}
