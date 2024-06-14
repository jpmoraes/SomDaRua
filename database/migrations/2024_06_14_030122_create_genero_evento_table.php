<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneroEventoTable extends Migration
{
    public function up()
    {
        Schema::create('genero_evento', function (Blueprint $table) {
            $table->unsignedBigInteger('evento_id');
            $table->unsignedBigInteger('genero_id');
            $table->timestamps();

            $table->foreign('evento_id')->references('id_evento')->on('evento')->onDelete('cascade');
            $table->foreign('genero_id')->references('id_genero')->on('genero')->onDelete('cascade');

            $table->primary(['evento_id', 'genero_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('genero_evento');
    }
}
