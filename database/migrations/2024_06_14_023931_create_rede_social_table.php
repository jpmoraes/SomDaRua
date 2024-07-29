<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedeSocialTable extends Migration
{
    public function up()
    {
        Schema::create('rede_social', function (Blueprint $table) {
            $table->id('id_rede_social');
            $table->string('url', 45)->nullable();
            $table->unsignedBigInteger('estabelecimento_id');
            $table->unsignedBigInteger('tipo_rede_id');
            $table->timestamps();

            $table->foreign('estabelecimento_id')->references('id_estabelecimento')->on('estabelecimento')->onDelete('cascade');
            $table->foreign('tipo_rede_id')->references('id_tipo_rede')->on('tipo_rede')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('redes_sociais');
    }
}
