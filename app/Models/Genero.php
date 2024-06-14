<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    public function evento()
    {
        return $this->belongsToMany(Evento::class, 'genero_evento', 'generos_id', 'evento_id');
    }

}
