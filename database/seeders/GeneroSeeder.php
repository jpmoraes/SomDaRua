<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    public function run()
    {
        DB::table('genero')->insert([
            ['nome' => 'Samba'],
            ['nome' => 'Forró/Sertanejo/Arrocha'],
            ['nome' => 'Jazz/Blues'],
            ['nome' => 'Hip hop/Rap'],
            ['nome' => 'Pop Rock/Rock/Metal'],
            ['nome' => 'Axé/Pagode Baiano'],
            ['nome' => 'Classico'],
            ['nome' => 'Eletrônico'],
            ['nome' => 'MPB'],
        ]);
    }
}

