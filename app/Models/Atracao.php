<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atracao extends Model
{
    use HasFactory;

    protected $table = 'atracao';
    protected $primaryKey = 'evento_id';

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id', 'id_evento');
    }

}
