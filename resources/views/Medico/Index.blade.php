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
    <span class="titulo1"><a name="consulta"></a>Lista de Médico</span>
		     @if(session()->exists('sucesso'))	
                          <p class="msg sucesso">{{session()->get('sucesso')}}</p>
                      @endif
<div class="caixa">
	<div class="d-flex justify-content-space-between base-busca">
		<a href="{{route('medico.create')}}" class="but butcad">Cadastrar Médico</a>
		<a href="" class="but busca filtro">Filtro</a>
	</div>
	
    
    <form> 
	<div class="base-form alt mostraFiltro">
		<div class="rows">
				<div class="col-4">
					<span class="label">Nome</span>
					<input type="text" name="nome" value="" placeholder="Digite o nome" class="form-campo">
				</div>
				<div class="col-6">
					<span class="label">Email</span>
					<input type="text" name="email" value="" placeholder="Digite o email" class="form-campo">
				</div>
				<div class="col-2">
					<input type="submit" name="" value="Buscar" class="btn">
				</div>
		</div>
		
	</div>
     </form>
	<table id="dataTable" width="100%" cellpadding="0" cellspacing="0" class="tabela">			
			
        <thead>
        <tr>
                <th width="5%" align="left">id:</th>
                <th width="40%" align="left">Nome médico</th>
                <th width="40%" align="left">Email</th>
                <th align="center">Editar</th>
                <th align="center">excluir</th>
        </tr>
        </thead>
        <tbody>
       
            @foreach($medicos as $medico)
            <tr>
                    <td>{{$medico->id}}</td>
                    <td>{{$medico->medico}}</td>
                    <td>{{$medico->email}}</td>
                    <td align="center"><a href="{{route('medico.edit', $medico->id)}}" class="editar but">Editar</a></td>
                    <td align="center"><a href="javascript: if(confirm('Deseja realmente excluir ?')){
                                                                      window.location.href = '{{route('medico.excluir', $medico->id)}}' }
                                                                      " class="excluir but">Excluir</a></td>
            </tr>
           @endforeach
                                                         
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
