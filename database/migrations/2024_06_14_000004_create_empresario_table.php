<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresarioTable extends Migration
{
    public function up()
    {
        Schema::create('empresario', function (Blueprint $table) {
            $table->string('cpf', 12)->primary();
            $table->string('nome', 255);
            $table->string('data_cadastro', 20)->nullable();
            $table->unsignedBigInteger('credenciais_id');
            $table->timestamps();
            $table->unique('cpf');
            $table->foreign('credenciais_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresarios');
    }
}
