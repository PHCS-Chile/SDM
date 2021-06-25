<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudio
 * @package App\Models
 * @version 1 (25/06/2021)
 */
class Estudio extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }

    public function pauta()
    {
        return $this->belongsTo(Pauta::class);
    }

    public function asignacions()
    {
        return $this->hasMany(Asignacion::class);
    }

}
