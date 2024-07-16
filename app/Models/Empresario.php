<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresario extends Model
{
    use HasFactory;

    protected $table = 'empresario';

    public function User()
    {
        return $this->belongsTo(User::class, 'id', 'id_credenciais');
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
