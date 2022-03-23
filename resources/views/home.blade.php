@extends("template")
@section("conteudo")
<div class="bemvindo">
		<section>
			
			<article>
				<a href="">
				<img src="{{url(asset('assets/img/ico-home-perfil.png'))}}">
				<h3>LISTA DE CLIENTES</h3>
				<p>Clique aqui para começar</p>
				</a>
			</article>
			<article>
				<a href="">
				<img src="{{url(asset('assets/img/ico-home-agendamento.png'))}}">
				<h3>Montar agenda</h3>
				<p>Clique aqui para começar</p>
				</a>
			</article>
			
			<article>
				<a href="">
				<img src="{{url(asset('assets/img/ico-home-agendar.png'))}}">
				<h3>ver agenda</h3>
				<p>Clique aqui para começar</p>
				</a>
			</article>
			
			<article>
				<a href="logoff.php">
				<img src="{{url(asset('assets/img/ico-home-sair.png'))}}">
				<h3>SAIR</h3>
				<p>Clique aqui para começar</p>
				</a>
			</article>
		</section>
</div>
@endsection