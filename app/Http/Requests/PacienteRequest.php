<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class PacienteRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            "paciente" => 'required',
            "cep"      => 'required',
            "bairro"   => 'required',
            "endereco" => 'required',
            "cidade"   => 'required',
            "uf"       => 'required',
            "sexo"     => 'required',
            "cpf"      => 'required',
            "rg"       => 'required',
            "ddd"      => 'required',
            "celular"  => 'required',
            "data_cadastro"   => 'required',
            "data_nascimento" => 'required',
            "email" => 'required|email|unique:pacientes',
            "senha" => 'required',
        ];
    }
}
