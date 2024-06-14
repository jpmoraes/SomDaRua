<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credenciais extends Model
{
    use HasFactory;

    public function empresario()
    {
        return $this->hasMany(Empresario::class, 'credenciais_id', 'id_credenciais');
    }

}
