<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailEmpresarioTable extends Migration
{
    public function up()
    {
        Schema::create('email_empresario', function (Blueprint $table) {
            $table->id('id_email_empresario');
            $table->string('email', 255);
            $table->string('empresario_cpf', 12);
            $table->timestamps();

            $table->foreign('empresario_cpf')->references('cpf')->on('empresario')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_empresarios');
    }
}