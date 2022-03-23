<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Especialidade;
use App\Http\Requests\MedicoRequest;

class MedicoController extends Controller
{
    
    public function index(Request $request)
    {
        
        $medicos = Medico::all();
        return view('Medico.Index', compact('medicos'));
    }

   
    public function create()
    {
         return view("Medico.Create");
    }
    
     public function especialidades()
    {
         $medicos = Medico::all();
         $especialidades = Especialidade::all();
         
         return view("Medico.Especialidades", compact('medicos', 'especialidades'));
    }

    public function addespecialidade(Request $request)
    {
        $dados = $request->all();
        $medico = Medico::find($dados['medico_id']);
        $especialidade = Especialidade::find($dados['especialidade_id']);
        
        return redirect()->route("medico.especialidade");
        
        
    }
    
    
    
    public function store(MedicoRequest $request)
    {
        $medico = Medico::create($request->all());
        return redirect()->route("medico.index");
        
        
    }

    
    public function show($id)
    {
        //
    }

    
     public function edit($id)
    {
        $medico = Medico::find($id);
        if(!$medico)
            return redirect()->route('medico.index');
        
        return view("Medico.Create", compact('medico'));
    }

    
    public function update(MedicoRequest $request, $id)
    {
        $medico = Medico::find($id);
        if(!$medico)
            return redirect()->route('medico.index');
        
        $update = $medico->update($request->all());
        
        if($update){
            return redirect()->route("medico.index")->with('sucesso', "Atualizado com Sucesso");
        }else{
            return redirect()->back->with('erro', "Falha ao atualizar");
        }
    }

    
     public function excluir($id)
    {
        $medico = Medico::find($id);
        if(!$medico)
            return redirect()->route('medico.index');
        
        $excluir = $medico->delete();
        
        if($excluir){
            return redirect()->route("medico.index")->with('sucesso', "Excluido com Sucesso");
        }else{
            return redirect()->back->with('erro', "Falha ao atualizar");
        }
    }
    
    
    
    
    
    
    public function destroy($id)
    {
        //
    }
}
