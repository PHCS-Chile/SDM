<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    const CENTRO = 1;
    const PH = 2;
    const ICI = 3;

    protected $dateFormat = 'd-m-Y H:i:s';

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class);
    }

    public function atributo()
    {
        return $this->belongsTo(Atributo::class);
    }

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
    ];
}
