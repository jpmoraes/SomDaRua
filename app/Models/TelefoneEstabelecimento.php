<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefoneEstabelecimento extends Model
{
    use HasFactory;

    protected $table = 'telefone_estabelecimento';
    protected $primaryKey = 'id_tel_estabelecimento';

    public function estabelecimento()
    {
        return $this->belongsTo(Estabelecimento::class, 'estabelecimento_id', 'id_estabelecimento');
    }

}
