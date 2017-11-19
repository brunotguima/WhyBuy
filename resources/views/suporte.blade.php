@extends('layouts.app') @section('content')

<div class="container">
	<h2 class="center">
		<span class="orange-text text-darken-2 center">SUPORTE</span>
		<h2>
			<div class="col 12">
				<h5 class="center-justify">Escreva um email com sugestões, críticas e dúvidas sobre o uso de nossa aplicação. Envie seu nome e email para que possamos
					responder suas perguntas. A equipe FOX developers agradece o contato.</h5>


				<form action="{{route('suporte.post')}}" method="post">
					{{csrf_field()}} @if (Auth::check())
					<label for="name" class="control-label">Nome Completo:</label>
					<input id="name" type="text" class="form-control" name="name" value="{{$mainPerfil->name}}">

					<label for="email" class="control-label">Email:</label>
					<input  id="email" type="text" class="form-control" name="email" value="{{$mainPerfil->email}}"> @else
					<label for="name" class="control-label">Nome Completo:</label>
					<input id="name" type="text" class="form-control" name="name" placeholder="Digite seu Nome!">

					<label for="email" class="control-label">Email:</label>
					<input id="email" type="text" class="form-control" name="email" placeholder="Digite seu Email!"> @endif

					<label for="mensagem" class="control-label">* Digite sua mensagem:</label>
					<textarea id="mensagem" type="text" class="materialize-textarea" name="mensagem" placeholder="Digite sua mensagem!" required
					 autofocus></textarea>

					<button type="submit" class="btn btn-primary orange darken-4">
						Enviar!
					</button>
				</form>
			</div>
</div>
@if(Session::has('sucess'))
<script>
	Materialize.toast('Sua mensagem foi enviada com sucesso e responderemos em breve!!', 4000);
</script> @endif @endsection