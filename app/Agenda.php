<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    
    protected  $primarykey = "id_agenda";


    public function medicos()
    {
        return $this->belongsTo(Medico::class);
    }
    
    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class, "agendamento");
    }
}
