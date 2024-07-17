<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoRedeTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_rede', function (Blueprint $table) {
            $table->id('id_tipo_rede');
            $table->string('tipo', 45)->nullable();

            DB::table('tipo_rede')->insert([
                ['tipo' => 'Instagram'],
                ['tipo' => 'Site'],
                ['tipo' => 'Facebook'],
                ['tipo' => 'Tik Tok'],
                ['tipo' => 'Twitter'],
            ]);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_rede');
    }
}
