<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoEmpresarioTable extends Migration
{
    public function up()
    {
        Schema::create('endereco_empresario', function (Blueprint $table) {
            $table->id('id_end_empresario');
            $table->string('rua', 150);
            $table->string('bairro', 45);
            $table->string('complemento', 45);
            $table->string('cep', 10);
            $table->string('numero', 20);
            $table->string('empresario_cpf', 12);
            $table->timestamps();

            $table->foreign('empresario_cpf')->references('cpf')->on('empresario')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('endereco_empresarios');
    }
}
