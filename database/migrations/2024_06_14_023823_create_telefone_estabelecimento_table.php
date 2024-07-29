<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefoneEstabelecimentoTable extends Migration
{
    public function up()
    {
        Schema::create('telefone_estabelecimento', function (Blueprint $table) {
            $table->id('id_tel_estabelecimento');
            $table->string('telefone', 14)->nullable();
            $table->unsignedBigInteger('estabelecimento_id');
            $table->timestamps();

            $table->foreign('estabelecimento_id')->references('id_estabelecimento')->on('estabelecimento')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telefone_estabelecimento');
    }
}