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
			<span class="titulo1"><a name="consulta"></a>Lista de Especialidade</span>
			<!-- mensagens--
			<p class="msg erro">Não foi possível realizar o seu cadastro</p>
			<p class="msg sucesso">Seu cadastro foi realizado com sucesso</p>
			-->
			<div class="caixa">
			<div class="base-form">
            <form action="{{route('medico.addespecialidade')}}" method="post">
                @csrf
                <table border="0" cellspacing="0">
                    <tbody>
                        <tr>                            
                            <th align="left">
				<span class="mb-1 d-block">Especialidades</span>
								<select  id="idEspecialidade" size="0" class="form-campo"> 
								@foreach($especialidades as $especialidade)	
                                                                    <option value="{{$especialidade->id}}">{{$especialidade->especialidade}}</option>
                                                                @endforeach
								</select>							                          
                            </th>
                             <th align="left">
								<span class="mb-1 d-block">Médicos</span>
								<select  id="medico" size="0" class="form-campo">
								@foreach($medicos as $medico)	
                                                                    <option value="{{$medico->id}}">{{$medico->medico}}</option>
                                                                @endforeach
								</select>			                          
                            </th>
						<th><input type="submit" name="Submit" value="Inserir" class="but mt-2 width-100"></th>                   
                    
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
        </div>

			<div class="caixa">
				<table id="dataTable"  width="100%" cellpadding="0" cellspacing="0" class="tabela">

					<thead>
						<tr>
							<th align="left" width="35%">Especialidade</th>
							<th align="left" width="35%">Médico</th>
							<th align="Center">Editar</th>
							<th align="Center">Excluir</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Cardiologista Teste</td>	
							<td>Medico Teste</td>		
							<td align="center"><a href="cadastro_especialidade.html"	class="editar but">Editar</a></td>
							<td align="center"><a href="cadastro_especialidade.html"	class="excluir but">Excluir</a></td>
						</tr>
					</tbody>

				</table>

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