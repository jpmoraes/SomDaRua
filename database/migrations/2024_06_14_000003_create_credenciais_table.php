<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredenciaisTable extends Migration
{
    public function up()
    {
        Schema::create('credenciais', function (Blueprint $table) {
            $table->id('id_credenciais');
            $table->string('usuario', 255)->unique();
            $table->string('senha', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('credenciais');
    }
}
