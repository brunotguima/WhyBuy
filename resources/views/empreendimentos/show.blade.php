@extends('layouts.app')
@section('content')

<div class="container">
 @foreach($empreendimento as $emp)
    <div class="row">
        </div>
<div class="row">
<div class="col s4 center">
</br>
</div>
</br>
    <div class="col s12 center">
    <div class="row">
        <div class="card-panel orange">
          <span class="white-text"> {{$emp->nomeFantasia}}
          </span>
      </div>
    </div>
    <img src="{{asset('/images/empreendimentos')}}/{{$emp->EmpImage}}">

            <label for="nomeFantasia" class="control-label">Nome Fantasia:</label>
            <h5 class="black-text"></h5>

            <label for="cnpj" class="control-label">CNPJ:</label>
            <h5 class="black-text">{{$emp->cnpj}}</h5>

            <label for="inscEst" class="control-label">Inscrição Estadual:</label>
            <h5 class="black-text">{{$emp->inscEst}}</h5>

            <label for="cep" class="control-label">CEP:</label>
            <h5 class="black-text">{{$emp->cep}}</h5>

            <label for="cidade" class="control-label">Cidade:</label>
            <h5 class="black-text">{{$emp->cidade}}</h5>

            <label for="estado" class="control-label">Estado:</label>
            <h5 class="black-text">{{$emp->estado}}</h5>

            <label for="razaoSocial" class="control-label">Razão Social:</label>
            <h5 class="black-text">{{$emp->razaoSocial}}</h5>

            <label for="ramoAtiv" class="control-label">Ramo de Atividade:</label>
            <h5 class="black-text">{{$emp->RamoAtivEmpreendimento->name}}
@endforeach
    </div>
</div>
</div>

@endsection