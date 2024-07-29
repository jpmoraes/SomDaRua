<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoTable extends Migration
{
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->id('id_evento');
            $table->string('nome', 255);
            $table->string('data', 10);
            $table->string('hora', 8);
            $table->double('valor_couvert')->nullable();
            $table->longText('descricao')->nullable();
            $table->unsignedBigInteger('estabelecimento_id');
            $table->timestamps();

            $table->foreign('estabelecimento_id')->references('id_estabelecimento')->on('estabelecimento')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
