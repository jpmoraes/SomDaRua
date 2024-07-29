<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class GeneroEvento extends Pivot
{
    protected $table = 'genero_evento';
    protected $primaryKey = 'evento_id';
    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id');
    }

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }
}