<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Medico extends Model
{
    protected  $primarykey = "id";
    
    protected $fillable = [
        "id",
        "medico",
        "endereco",
        "bairro",
        "cidade",
        "cep",
        "cpf",
        "rg",
        "ddd",
        "celular",
        "email",
        "senha",
    ];
    
    
    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }
    
    public function especialidades()
    {
        return $this->belongsToMany(Especialidade::class);
    }
    
    
   
}
