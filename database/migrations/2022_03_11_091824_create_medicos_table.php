<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("medico", 100);
            $table->string("crm", 30);
            $table->string("email", 100);
            $table->string("senha", 20);
            $table->string("endereco", 120);
            $table->string("bairro", 100);
            $table->string("cidade", 100);
            $table->string("uf", 2);
            $table->string("cep", 10);
            $table->string("ddd", 2);
            $table->string("celular", 10);
            $table->string("sexo", 30);
            $table->string("cpf", 15);
            $table->string("rg", 15);
            $table->date("data_nascimento");
            $table->date("data_cadastro");
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
        Schema::dropIfExists('medicos');
    }
}
