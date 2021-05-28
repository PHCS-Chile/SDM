<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }


}
