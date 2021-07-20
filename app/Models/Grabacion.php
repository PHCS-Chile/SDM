<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grabacion extends Model
{
    use HasFactory;
    protected $fillable = [

    ];

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class);
    }
}
