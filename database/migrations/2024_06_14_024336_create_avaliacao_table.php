<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoTable extends Migration
{
    public function up()
    {
        Schema::create('avaliacao', function (Blueprint $table) {
            $table->id('id_avaliacao');
            $table->string('link_avaliacao', 255)->nullable();
            $table->unsignedBigInteger('evento_id');
            $table->timestamps();

            $table->foreign('evento_id')->references('id_evento')->on('evento')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('avaliacao');
    }
}
