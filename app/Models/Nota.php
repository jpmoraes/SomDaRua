<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    public function avaliacao()
    {
        return $this->belongsTo(Avaliacao::class, 'avaliacao_id_avaliacao', 'id_avaliacao');
    }

}
