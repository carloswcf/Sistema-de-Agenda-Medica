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
		<span class="titulo1"><a name="consulta"></a>Cadastro especialidade</span>
			<div class="erromsg">
                    <ul>
                        @foreach($errors->all() as $erro)
                        <li>{{$erro}}</li>
                        @endforeach
                    </ul>
               </div>
		<div class="caixa">
		
			<div class="base-form">	
			@if(isset($especialidade))
                            <form action="{{route('especialidade.update', $especialidade->id)}}" method="post">
                            <input name="_method" type="hidden" value="PUT">
                         @else
                            <form action="{{route('especialidade.store')}}" method="post">
                         @endif
			
                         @csrf
                        <span class="ttf">Dados</span>
			<div class="rows">
				<div class="col-12">
					<span class="label">Especialidade</span>
					<input type="text" name="especialidade" value="{{isset($especialidade->especialidade) ? $especialidade->especialidade : old('especialidade')}}" class="form-campo">
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


