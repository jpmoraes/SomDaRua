<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    use HasFactory;
    protected $table = 'estabelecimento';
    protected $primaryKey = 'id_estabelecimento';
 
    public function empresario()
    {
        return $this->belongsTo(Empresario::class, 'empresario_cpf', 'cpf');
    }

    public function telefones()
    {
        return $this->hasMany(TelefoneEstabelecimento::class, 'estabelecimento_id', 'id_estabelecimento');
    }

    public function eventos()
    {
        return $this->hasMany(Evento::class, 'estabelecimento_id', 'id_estabelecimento');
    }

    public function redeSocial()
    {
        return $this->hasMany(RedeSocial::class, 'estabelecimento_id', 'id_estabelecimento');
    }

    public function endereco()
    {
        return $this->hasOne(EnderecoEstabelecimento::class, 'estabelecimento_id', 'id_estabelecimento');
    }

}
