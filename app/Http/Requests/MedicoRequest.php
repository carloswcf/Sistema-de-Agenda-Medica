<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            "medico"   => 'required',
            "endereco" => 'required',
            "bairro"   => 'required',
            "cidade"   => 'required',
            "cep"      => 'required',
            "cpf"      => 'required',
            "rg"       => 'required',
            "ddd"      => 'required',
            "celular"  => 'required',
            "email"    => 'required|email|unique:medicos',
            "senha"    => 'required',
            
        ];
    }
}
