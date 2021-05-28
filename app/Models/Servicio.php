<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    const ACTIVO = 1;
    const DESACTIVADO_TEMPORALMENTE = 2;
    const INACTIVO = 3;

    public function agentes()
    {
        return $this->hasMany(Agente::class);
    }

    public function estudio()
    {
        return $this->belongsTo(Estudio::class);
    }
}
