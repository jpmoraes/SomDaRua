<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoEstabelecimentoTable extends Migration
{
    public function up()
    {
        Schema::create('endereco_estabelecimento', function (Blueprint $table) {
            $table->id('id_end_estabelecimento');
            $table->string('rua', 150);
            $table->string('bairro', 45);
            $table->string('complemento', 45);
            $table->string('cep', 10);
            $table->string('numero', 20);
            $table->unsignedBigInteger('estabelecimento_id');
            $table->timestamps();

            $table->foreign('estabelecimento_id')->references('id_estabelecimento')->on('estabelecimento')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('endereco_estabelecimento');
    }
}
