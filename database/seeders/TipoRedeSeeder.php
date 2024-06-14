<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoRedeSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipo_rede')->insert([
            ['tipo' => 'Instagram'],
            ['tipo' => 'Facebook'],
            ['tipo' => 'Site'],
            ['tipo' => 'Blog'],
            ['tipo' => 'X (twitter)'],
            ['tipo' => 'Tik tok'],
            ['tipo' => 'Kawai'],
        ]);
    }
}
