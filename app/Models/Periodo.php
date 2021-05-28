<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    const ACTIVO = 1;
    const INACTIVO = 2;

    public function asignacions(){
        return $this->hasMany(Asignacion::class);
    }
}
