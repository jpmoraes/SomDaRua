<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstabelecimentoTable extends Migration
{
    public function up()
    {
        Schema::create('estabelecimento', function (Blueprint $table) {
            $table->id('id_estabelecimento');
            $table->string('nome', 255);
            $table->string('cpf_cnpj', 45)->nullable();
            $table->string('empresario_cpf', 12);
            $table->timestamps();

            $table->foreign('empresario_cpf')->references('cpf')->on('empresario')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('estabelecimentos');
    }
}