<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoEmpresario extends Model
{
    use HasFactory;

    protected $table = 'endereco_empresario';
    protected $primaryKey = 'id_end_empresario';

    public function empresario()
    {
        return $this->belongsTo(Empresario::class, 'empresario_cpf', 'cpf');
    }

}