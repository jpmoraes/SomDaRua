<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoEstabelecimento extends Model
{
    use HasFactory;

    protected $table = 'endereco_estabelecimento';
    protected $primaryKey = 'id_end_estabelecimento';

    public function estabelecimento()
    {
        return $this->belongsTo(Estabelecimento::class, 'estabelecimento_id', 'id_estabelecimento');
    }

}
