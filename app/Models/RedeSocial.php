<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeSocial extends Model
{
    use HasFactory;
    protected $table = 'rede_social';

    public function estabelecimento()
    {
        return $this->belongsTo(Estabelecimento::class, 'estabelecimento_id', 'id_estabelecimento');
    }

    public function tipoRede()
    {
        return $this->belongsTo(TipoRede::class, 'tipo_rede_idtipo_Rede', 'id_tipo_rede');
    }

}
