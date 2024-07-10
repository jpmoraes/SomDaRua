<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresario extends Model
{
    use HasFactory;
    public function credenciais()
    {
        return $this->belongsTo(Credenciais::class, 'credenciais_id', 'id_credenciais');
    }

    public function estabelecimento()
    {
        return $this->hasMany(Estabelecimento::class, 'empresario_cpf', 'cpf');
    }

    public function email()
    {
        return $this->hasMany(EmailEmpresario::class, 'empresario_cpf', 'cpf');
    }

    public function telefone()
    {
        return $this->hasMany(TelefoneEmpresario::class, 'empresario_cpf', 'cpf');
    }

    public function endereco()
    {
        return $this->hasOne(EnderecoEmpresario::class, 'empresario_cpf', 'cpf');
    }

}