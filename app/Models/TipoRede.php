<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRede extends Model
{
    use HasFactory;
    public function redesSociais()
    {
        return $this->hasMany(RedeSocial::class, 'tipo_rede_idtipo_Rede', 'id_tipo_rede');
    }

}
