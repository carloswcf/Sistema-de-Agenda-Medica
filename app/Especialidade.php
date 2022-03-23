<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    
    protected  $primarykey = "id";
    
    protected $fillable = [
        "id",
        "especialidade",
    ];
    
    public function medicos()
    {
        return $this->belongsToMany(Medico::class);
    }
}
