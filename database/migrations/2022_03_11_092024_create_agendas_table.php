<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id_agenda');
            $table->integer("id_medico");
            $table->string("turno", 10);
            $table->integer("qtde_confirmado")->default(0);
            $table->integer("qtde_inscrito")->default(0);
            $table->date("data");
            
            $table->foreign("id_medico")->references("id_medico")->on("medicos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
