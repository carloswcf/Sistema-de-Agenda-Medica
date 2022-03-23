<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Http\Requests\PacienteRequest;




class PacienteController extends Controller
{
    
    public function index()
    {
        $pacientes = Paciente::all();
        
        return view('Paciente.Index', compact('pacientes'));
    }

   
    public function create()
    {
        return view('Paciente.Create');
    }

    public function store(PacienteRequest $request)
    {
        $pacientes = Paciente::create($request->all());
        return redirect()->route("paciente.index");
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        if(!$paciente)
            return redirect()->route('paciente.index');
        
        return view("Paciente.Create", compact('paciente'));
    }

    
    public function update(PacienteRequest $request, $id)
    {
       
        $paciente = Paciente::find($id);
        if(!$paciente)
            return redirect()->route('paciente.index');
        
        $update = $paciente->update($request->all());
        
        if($update){
            return redirect()->route("paciente.index")->with('sucesso', "Atualizado com Sucesso");
        }else{
            return redirect()->back->with('erro', "Falha ao atualizar");
        }
    }

    
    public function excluir($id)
    {
        $paciente = Paciente::find($id);
        if(!$paciente)
            return redirect()->route('paciente.index');
        
        $excluir = $paciente->delete();
        
        if($excluir){
            return redirect()->route("paciente.index")->with('sucesso', "Excluido com Sucesso");
        }else{
            return redirect()->back->with('erro', "Falha ao atualizar");
        }
    }
    
    
    
    
    public function destroy($id)
    {
        
    }
}
