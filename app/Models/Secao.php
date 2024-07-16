<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secao extends Model
{
    use HasFactory;
    protected $table = "sessions";

    public function User()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

}
