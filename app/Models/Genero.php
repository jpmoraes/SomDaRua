<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'evento';

    public function generos()
    {
        return $this->belongsToMany(Genero::class, 'genero_evento', 'evento_id', 'genero_id')
                    ->using(GeneroEvento::class);
    }
}
