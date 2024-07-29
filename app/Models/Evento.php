<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'evento';
    protected $primaryKey = 'id_evento';

    public function estabelecimento()
    {
        return $this->belongsTo(Estabelecimento::class, 'estabelecimento_id', 'id_estabelecimento');
    }

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class, 'evento_id', 'id_evento');
    }

    public function atracoes()
    {
        return $this->hasMany(Atracao::class, 'evento_id', 'id_evento');
    }

    public function generos()
    {
        return $this->belongsToMany(Genero::class, 'genero_evento', 'evento_id', 'generos_id');
    }

}
