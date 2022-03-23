<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidade;
use App\Http\Requests\EspecialidadeRequest;

class EspecialidadeController extends Controller
{
    
    public function index()
    {
        $especialidades = Especialidade::all();
        return view("Especialidade.Index", compact('especialidades'));
    }

   
    public function create()
    {
        return view("Especialidade.Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EspecialidadeRequest $request)
    {
        $especialidade = Especialidade::create($request->all());
        return redirect()->route("especialidade.index");
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $especialidade = Especialidade::find($id);
        if(!$especialidade)
            return redirect()->route('especialidade.index');
        
        return view("Especialidade.Create", compact('especialidade'));
    }

    
    public function update(EspecialidadeRequest $request, $id)
    {
        $especialidade = Especialidade::find($id);
        
        if(!$especialidade)
            return redirect()->route('paciente.index');
        
        $update = $especialidade->update($request->all());
        
        if($update){
            return redirect()->route("especialidade.index")->with('sucesso', "Atualizado com Sucesso");
        }else{
            return redirect()->back->with('erro', "Falha ao atualizar");
        }
    }

   
     public function excluir($id)
    {
        $especialidade = Especialidade::find($id);
        if(!$especialidade)
            return redirect()->route('especialidade.index');
        
        $excluir = $especialidade->delete();
        
        if($excluir){
            return redirect()->route("especialidade.index")->with('sucesso', "Excluido com Sucesso");
        }else{
            return redirect()->back->with('erro', "Falha ao atualizar");
        }
    }
    
    
    
    
    
    
    
    
    public function destroy($id)
    {
        
    }
}
