<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Paciente extends Model
{
  protected  $primarykey = "id";
   
   protected  $fillable = [
       "id",
       "paciente",
       "cep",
       "bairro",
       "endereco",
       "cidade",
       "uf",
       "sexo",
       "cpf",
       "rg",
       "ddd",
       "celular",
       "data_cadastro",
       "data_nascimento",
       "email",
       "senha",
   ];


   public function agendas()
  {
      return $this->belongstoMany(Agenda::class, "agendamento");
  }

  
 }
