@extends("template")
@section("conteudo")
<div class="base-listas">
		<span class="titulo1"><a name="consulta"></a>Cadastro médico</span>
			<div class="erromsg">
                    <ul>
                        @foreach($errors->all() as $erro)
                        <li>{{$erro}}</li>
                        @endforeach
                    </ul>
               </div>
		<div class="caixa">		
			<div class="base-form">	
			@if(isset($medico))
                            <form action="{{route('medico.update', $medico->id)}}" method="post">
                            <input name="_method" type="hidden" value="PUT">
                         @else
                            <form action="{{route('medico.store')}}" method="post">
                         @endif
                        
                        @csrf
                        <span class="ttf">Dados pessoais</span>	
			
			<div class="rows">
			<div class="col-12">
				 <span class="label">Nome</span>
				<input type="text" name="medico" class="form-campo" value="{{isset($medico->medico) ? $medico->medico : old('medico')}}">
			</div>
			
			<div class="col-6">
				 <span class="label">Endereço</span>
				<input type="text" name="endereco" class="form-campo" value="{{isset($medico->endereco) ? $medico->endereco : old('endereco')}}">
			</div>
            <div class="col-6">
				 <span class="label">Bairro</span>
				<input type="text" name="bairro" class="form-campo" value="{{isset($medico->bairro) ? $medico->bairro : old('bairro')}}">
			</div>
            <div class="col-6">
				 <span class="label">Cidade</span>
				<input type="text" name="cidade" class="form-campo" value="{{isset($medico->cidade) ? $medico->cidade : old('cidade')}}">
			</div>
                
                
			<div class="col-3">
				 <span class="label">Estado</span>
				<select name="estado" class="form-campo"> 
					<option value="estado">Selecione o Estado</option> 
					<option value="ac">AC</option> 
					<option value="al">AL</option> 
					<option value="am">AM</option> 
					<option value="ap">AP</option> 
					<option value="ba">BA</option> 
					<option value="ce">CE</option> 
					<option value="df">DF</option> 
					<option value="es">ES</option> 
					<option value="go">GO</option> 
					<option value="ma">MA</option> 
					<option value="mt">MT</option> 
					<option value="ms">MS</option> 
					<option value="mg">MG</option> 
					<option value="pa">PA</option> 
					<option value="pb">PB</option> 
					<option value="pr">PR</option> 
					<option value="pe">PE</option> 
					<option value="pi">PI</option> 
					<option value="rj">RJ</option> 
					<option value="rn">RN</option> 
					<option value="ro">RO</option> 
					<option value="rs">RS</option> 
					<option value="rr">RR</option> 
					<option value="sc">SC</option> 
					<option value="se">SE</option> 
					<option value="sp">SP</option> 
					<option value="to">TO</option> 
				</select>
			</div>                
			
			
			<div class="col-3">
				 <span class="label">CEP</span>
				<input type="text" name="cep" class="form-campo" value="{{isset($medico->cep) ? $medico->cep : old('cep')}}">
			</div>
                        
            <div class="col-3">
				 <span class="label">CPF</span>
				<input type="text" name="cpf" class="form-campo" value="{{isset($medico->cpf) ? $medico->cpf : old('cpf')}}">
			</div>
			
           <div class="col-4">
				 <span class="label">RG</span>
				<input type="text" name="rg" class="form-campo" value="{{isset($medico->rg) ? $medico->rg : old('rg')}}">
			</div>             
			<div class="col-2">
				 <span class="label">DDD</span>
				<input type="text" name="ddd" class="form-campo" value="{{isset($medico->ddd) ? $medico->ddd : old('ddd')}}">
			</div>   
			<div class="col-3">
				 <span class="label">Celular</span>
				<input type="text" name="celular" class="form-campo" value="{{isset($medico->celular) ? $medico->celular : old('celular')}}">
			</div>
			</div>
			
			<span class="ttf">Dados de acesso</span>
			<div class="rows">
			<div class="col-12">
				 <span class="label">Email</span>
				<input type="text" name="email" value="{{isset($medico->email) ? $medico->email : old('email')}}" class="form-campo">
			</div>
			
			<div class="col-6">
				 <span class="label">Senha</span>
				<input type="text" name="senha" value="{{isset($medico->senha) ? $medico->senha : old('senha')}}" class="form-campo">
			</div>	
			<div class="col-12 mt-1">			
                <input type="submit" name="logar" id="logar" value="cadastrar" class="but">
			</div>
			</div>
                        
                        
		</form>
		</div>
		</div>
	</div>

@endsection
