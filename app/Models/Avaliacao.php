<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $table = "avaliacao";
    
    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id', 'id_evento');
    }

    public function nota()
    {
        return $this->hasMany(Nota::class, 'id_avaliacao', 'id_avaliacao');
    }

}
