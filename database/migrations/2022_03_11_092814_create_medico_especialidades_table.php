<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicoEspecialidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico_especialidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id")->unsigned();
            $table->integer("id")->unsigned();
            
            $table->foreign("id")->references("id")->on("medicos");
            $table->foreign("id")->references("id")->on("especialidades");
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
        Schema::dropIfExists('medico_especialidades');
    }
}
