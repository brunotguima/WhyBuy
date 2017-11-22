@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<h3 class="center">
			<span class="orange-text">CADASTRE A SUA PROMOÇÃO</span>
		</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" method="POST" action="{{ route('promocao.store') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="empreendimento">Empreendimento:</label>
				<select class="browser-default" name="empreendimentos_id" id="empreendimentos_id">
					@foreach($empreendimentos as $empreendimento)
					<option value="{{$empreendimento->id}}"> {{$empreendimento->nomeFantasia}}</option>
					@endforeach
				</select>
				<label for="nomeProd" class="col m4 control-label">Nome Produto:</label>
				<div class="col m6 input-field">
					<input id="nomeProd" type="text" class="validate" name="nomeProd"placeholder="Bicicleta"required>
				</div>

				<label for="marcaProd" class="col m4 control-label">Marca do Produto:</label>
				<div class="col m6 input-field">
					<input id="marcaProd" type="text" class="validate" name="marcaProd"placeholder="Caloi" required>
				</div>

				<label for="valorProd" class="col m4 control-label">Valor do Produto:</label>
				<div class="col m6 input-field">
					<input id="valorProd" type="text" class="validate" name="valorProd" required placeholder="R$100,00">
				</div>

				<label for="categoria" class="col m4 control-label">Categoria do Produto:</label>
				<select class="browser-default" name="categorias" id="categorias">
				@foreach($categorias as $categoria)
					<option value="{{$categoria->id}}">{{$categoria->name}}</option>
					@endforeach
					</select>
				<label for="codProd" class="col m4 control-label">Codigo do Produto:</label>
				<div class="col m6 input-field">
					<input id="codProd" type="text" class="codProd" name="codProd" placeholder="17309" required>
				</div>

				<div class="col m6 input-field">
					<button type="submit" class="btn btn-primary orange darken-4">
						Cadastrar
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
    function formatar(mascara, documento) {
        var i = documento.value.length;
        var saida = mascara.substring(0, 1);
        var texto = mascara.substring(i)

        if (texto.substring(0, 1) != saida) {
            documento.value += texto.substring(0, 1);
        }

    }
</script>
<script>
	$(document).ready(function () {
        $('select').select2({minimumResultsForSearch: Infinity});
    });

</script>
@if($errors->any()) @foreach ($errors->all() as $error)
<script>
	var error = "<?=$error?>"
    Materialize.toast(error, 5000);

</script> @endforeach @endif @endsection