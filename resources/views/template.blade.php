<html>
<head>
<meta charset="utf-8">
<title>Sistema de Agendamento Médico</title>
<link rel="stylesheet" type="text/css" href="{{url(mix('assets/css/app.css'))}}">
<link rel="shortcut icon" href=""/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
   
    @include("cabecalho")
    <div class="conteudo">	
        <div class="menu">	
		<ul>
			<span class="ttp">Painel de controle</span>
			<li><a href="{{route('home')}}">home</span></a></li>
			<li><a href="{{route('paciente.index')}}">Paciente</a></li>
			<li><a href="{{route('medico.index')}}">Médicos</a></li>
			<li><a href="{{route('especialidade.index')}}">Especialidades</a></li>
			<li><a href="{{route('medico.especialidades')}}">Médico especialidades</a></li>
                        <span class="ttp">agendamento</span>
			                       
			<li><a href="{{route('agenda.index')}}">Agendas do Médico</a></li>	
            <li><a href=""> <i class="icone ico5"></i><span>SAIR</span></a></li>
		</ul>
	</div>
       <div class="base-home">
	@yield("conteudo")
      </div>
        
      </div>
</body>
</html>