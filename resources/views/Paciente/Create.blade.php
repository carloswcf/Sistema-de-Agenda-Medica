@extends("template")
@section("conteudo")
<link rel="stylesheet" href="js/datatables/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="js/datatables/css/responsive.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="css/auxiliar.css">
<link rel="stylesheet" type="text/css" href="css/grade.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/DataTables_boot.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href=""/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="base-listas">
	      <span class="titulo1"><a name="consulta"></a>Meu Perfil</span>
              <div class="erromsg">
                    <ul>
                        @foreach($errors->all() as $erro)
                        <li>{{$erro}}</li>
                        @endforeach
                    </ul>
               </div>
		<div class="caixa">
		
			<div class="base-form">	
                         @if(isset($paciente))
                            <form action="{{route('paciente.update', $paciente->id)}}" method="post">
                            <input name="_method" type="hidden" value="PUT">
                         @else
                            <form action="{{route('paciente.store')}}" method="post">
                         @endif
			
			 @csrf
                           <span class="ttf">Dados pessoais</span>
			<div class="rows">
				<div class="col-12">
					 <span class="label">Nome</span>
					<input type="text" name="paciente" class="form-campo" value="{{isset($paciente->paciente) ? $paciente->paciente : old('paciente')}}">					
				</div>
				<div class="col-4">
					 <span class="label">CEP</span>
					<input type="text" name="cep" class="form-campo" value="{{isset($paciente->cep) ? $paciente->cep : old('cep')}}">
				</div>
				
				<div class="col-8">
					 <span class="label">Bairro</span>
					<input type="text" name="bairro" class="form-campo" value="{{isset($paciente->bairro) ? $paciente->bairro : old('bairro')}}">
				</div>
				
				<div class="col-6">
					 <span class="label">Endereço</span>
					<input type="text" name="endereco" class="form-campo" value="{{isset($paciente->endereco) ? $paciente->endereco : old('endereco')}}">
				</div>				
				<div class="col-6">
					 <span class="label">Cidade</span>
					<input type="text" name="cidade" class="form-campo" value="{{isset($paciente->cidade) ? $paciente->cidade : old('cidade')}}">
				</div>		
				
                                <div class="col-4">
					 <span class="label">Estado</span>
					<select name="uf" class="form-campo">
						<option class="form-campo">Selecione o Estado</option> 
					  <option value="AC" >Acre</option> 
						<option value="AL">Alagoas</option> 
						<option value="AM">Amazonas</option> 
						<option value="AP">Amapá</option> 
						<option value="BA">Bahia</option> 
						<option value="CE">Ceará</option> 
						<option value="DF">Distrito Federal</option> 
						<option value="ES">Espírito Santo</option> 
						<option value="GO">Goiás</option> 
						<option value="MA">Maranhão</option> 
						<option value="MT">Mato Grosso</option> 
						<option value="MS">Mato Grosso do Sul</option> 
						<option value="MG">Minas Gerais</option> 
						<option value="PA">Pará</option> 
						<option value="PB">Paraíba</option> 
						<option value="PR">Paraná</option> 
						<option value="PE">Pernambuco</option> 
						<option value="PI">Piauí</option> 
						<option value="RJ">Rio de Janeiro</option> 
						<option value="RN">Rio Grande do Norte</option> 
						<option value="RO">Rondônia</option> 
						<option value="RS">Rio Grande do Sul</option> 
						<option value="RR">Roraima</option> 
						<option value="SC">Santa Catarina</option> 
						<option value="SE">Sergipe</option> 
						<option value="SP">São Paulo</option> 
						<option value="TO">Tocantins</option> 	
					</select>
				</div>               
				
				<div class="col-4">
					 <span class="label">Sexo</span> 
					<select name="sexo" class="form-campo" value="{{isset($paciente->sexo) ? $paciente->sexo : old('sexo')}}">
						<option class="form-campo">Selecione o Sexo</option> 
						<option value="Masculino" >Masculino</option> 
						<option value="Feminino" >Feminino</option> 
						<option value="Outro"    >Outro</option>                     	
					</select>
				</div>		
				<div class="col-4">
					 <span class="label">CPF</span>
					<input type="text" name="cpf" class="form-campo" value="{{isset($paciente->cpf) ? $paciente->cpf : old('cpf')}}">
				</div>
				
			   <div class="col-6">
					 <span class="label">RG</span>
					<input type="text" name="rg" class="form-campo" value="{{isset($paciente->rg) ? $paciente->rg : old('rg')}}">
				</div>
				<div class="col-2">
					 <span class="label">DDD</span>
					<input type="text" name="ddd" class="form-campo" value="{{isset($paciente->ddd) ? $paciente->ddd : old('ddd')}}">
				</div>
				<div class="col-4">
					 <span class="label">Celular</span>
					<input type="text" name="celular" class="form-campo" value="{{isset($paciente->celular) ? $paciente->celular : old('celular')}}">
				</div>
				
				<div class="col-6">
					 <span class="label">Data Nascimento</span>
					<input type="date" name="data_nascimento" class="form-campo" value="{{isset($paciente->data_nascimento) ? $paciente->data_nascimento : old('data_nascimento')}}">
				</div>
					
				<div class="col-6">
					 <span class="label">Data Cadastro</span>
					<input type="date" name="data_cadastro" class="form-campo" value="{{isset($paciente->data_cadastro) ? $paciente->data_cadastro : old('data_cadastro')}}">
				</div>
			</div>
			
			<span class="ttf">Dados de acesso</span>
			<div class="rows">
				<div class="col-6">
					 <span class="label">Email</span>
					<input type="text" name="email" class="form-campo" value="{{isset($paciente->email) ? $paciente->email : old('email')}}">
				</div>
				<div class="col-6">
					 <span class="label">Senha</span>
					<input type="password" name="senha" class="form-campo" value="{{isset($paciente->senha) ? $paciente->senha : old('senha')}}">
				</div>	
				<div class="col-12 mt-1">
					<input type="submit" name="logar" id="logar" value="cadastrar" class="but">
				</div>
			</div>
                        
                        
		</form>
		</div>
	</div>
    </div>

<script src="js/jquery.min.js"></script>
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/datatables/js/dataTables.responsive.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/js.js"></script>
<script src="js/funcao.js"></script>
@endsection
