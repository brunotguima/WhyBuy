    @extends('layouts.app')

@section('content')

<div class="col l4">
<h2>Seu Empreendimento</h2>
</div>
<div class="col l4">
<table class="bordered">
    <thead>
    <tr>
        <th>Nome Estabelecimento</th>
        <th>CNPJ</th>
        <th>Inscrição Estadual</th>
        <th>CEP</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ramo de Atividade</th>
        <th>Nome Fantasia</th>
    </tr>
@foreach ($empreendimentos as $e)
    <tr>
    <td>{{$e->nomeEstab}}</td>
    <td>{{$e->cnpj}}</td>
    <td>{{$e->inscrEst}}</td>
    <td>{{$e->cep}}</td>
    <td>{{$e->cidade}}</td>
    <td>{{$e->estado}}</td>
    <td>{{$e->ramoAtiv}}</td>
    <td>{{$e->nomeFant}}</td>
</tr>
@endforeach
    </div>
</div>
 @endsection