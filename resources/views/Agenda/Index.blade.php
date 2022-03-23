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
<span class="titulo1"><a name="consulta"></a>Ver Agenda do médico</span>
        <div class="caixa">
			<div class="base-form">
				<form name="busca" method="get" action="" name="buscausuario" id="buscausuario">
					<table border="0" cellspacing="0">
						<tbody>
							<tr>				
								<th width="25%" align="left">
									<span class="mb-1 d-block">Data 1</span>
									<input type="date" name="data_inicial" value="" class="form-campo"> 
								</th>
								<th width="25%" align="left">
									<span class="mb-1 d-block">Data 2 </span>
									<input type="date" name="data_final" value="" class="form-campo"> 
								</th>
								<th width="45%" align="left">
									<span class="mb-1 d-block">Médico</span>
									<select name="medico" class="form-campo"> 
										<option value="">Todos</option>
										<option value ='1' $selecionado>Medico Teste</option>
									</select>
								</th>
								<th><input type="submit" name="Submit" value="OK" class="but mt-2 width-100"></th>
						</tr>
						</tbody>
					</table>
				</form>
			</div>
        </div>

        <div class="caixa">       
            <table id="dataTable" width="100%" cellpadding="0" cellspacing="0" class="tabela">			

                <thead>
                    <tr>
                        <th width="15%" align="center">Data:</th>
                        <th width="35%" align="center">Médico:</th>
                        <th width="15%" align="center">Turno:</th>				
                        <th width="15%" align="center">Limite</th>				
                        <th width="5%" align="center">Insc</th>
                        <th width="5%" align="center">Conf</th>
                        <th align="center">Clientes</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td align="center">10/10/2010</td>
                        <td align="center">Medico Teste</td>
                        <td align="center">Vespertino</td>
                        <td align="center">30</td>					
                        <td align="center">10</td>
                        <td align="center">20</td>
                        <td align="center"><a href="{{route('agenda.detalhe')}}" class="editar but">Clientes</a></td>
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
