<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id_agendamento');
            $table->integer("id_agenda");
            $table->integer("id_paciente");
            $table->string("confirmado", 1)->default("N");
            $table->string("realizado", 1)->default("N");
            $table->date("data_agendamento");
            $table->date("hora_agendamento");
            
            $table->foreign("id_agenda")->references("id_agenda")->on("agendas");
            $table->foreign("id_paciente")->references("id_paciente")->on("pacientes");
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
        Schema::dropIfExists('agendamentos');
    }
}
