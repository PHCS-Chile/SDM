<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    const ACTIVO = 1;
    const INACTIVO = 2;

    public function evaluacions()
    {
        return $this->hasMany(Evaluacion::class);
    }

}
