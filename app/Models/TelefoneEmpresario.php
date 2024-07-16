<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefoneEmpresario extends Model
{
    use HasFactory;
    protected $table = 'telefone_empresario';

    public function empresario()
    {
        return $this->belongsTo(Empresario::class, 'empresario_cpf', 'cpf');
    }

}
