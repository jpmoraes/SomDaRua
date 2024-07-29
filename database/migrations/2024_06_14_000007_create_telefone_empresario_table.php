<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefoneEmpresarioTable extends Migration
{
    public function up()
    {
        Schema::create('telefone_empresario', function (Blueprint $table) {
            $table->id('id_tel_empresario');
            $table->string('telefone', 14);
            $table->string('empresario_cpf', 12);
            $table->timestamps();

            $table->foreign('empresario_cpf')->references('cpf')->on('empresario')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telefone_empresario');
    }
}