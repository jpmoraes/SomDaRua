<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailEmpresario extends Model
{
    use HasFactory;

    public function empresario()
    {
        return $this->belongsTo(Empresario::class, 'empresario_cpf', 'cpf');
    }

}
