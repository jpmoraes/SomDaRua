<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaTable extends Migration
{
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->id();
            $table->integer('notas')->nullable();
            $table->unsignedBigInteger('id_avaliacao');
            $table->timestamps();

            $table->foreign('id_avaliacao')->references('id_avaliacao')->on('avaliacao')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
