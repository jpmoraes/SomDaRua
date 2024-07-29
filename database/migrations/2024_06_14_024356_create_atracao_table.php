<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtracaoTable extends Migration
{
    public function up()
    {
        Schema::create('atracao', function (Blueprint $table) {
            $table->id('id_atracao');
            $table->string('nome', 255);
            $table->unsignedBigInteger('evento_id');
            $table->timestamps();

            $table->foreign('evento_id')->references('id_evento')->on('evento')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('atracao');
    }
}
