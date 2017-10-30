@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
                <h3 class="center"><span class="orange-text">{{$empreendimento->nomeFantasia}}</span></h3>
        </div>
<div class="row">
<div class="col s4 center">
</br>
<img class="circle" width="100" height="100" src="{{asset('/images/empreendimentos')}}/{{$empreendimento->EmpImage}}">
<button class="btn waves-effect deep-orange" onClick="window.location.href='/empreendimentos/{{$empreendimento->id}}/edit'">Editar o Local</button>
</div>
</br>
    <div class="col s8 center">
            <label for="email" class="control-label">CNPJ:</label>
            <h5 class="black-text">{{$empreendimento->cnpj}}<h5>

            <label for="dateNasc" class="control-label">Sua Data de Nascimento:</label>
            <h5 class="black-text">{{$empreendimento->dateNasc}}<h5>

            <label for="sexo" class="control-label">Sexo:</label>
            <h5 class="black-text">{{$empreendimento->}}<h5>

            <label for="rg" class="control-label">Seu RG:</label>
            <h5 class="black-text">{{$mainPerfil->perfil->rg}}<h5>

            <label for="cpf" class="control-label">Seu CPF:</label>
            <h5 class="black-text">{{$mainPerfil->perfil->cpf}}<h5>

            <label for="telUm" class="control-label">Seu Telefone:</label>
            <h5 class="black-text">{{$mainPerfil->perfil->telUm}}<h5>

            <label for="cell" class="control-label">Seu Celular:</label>
            <h5 class="black-text">{{$mainPerfil->perfil->cell}}<h5>
    </div>
</div>
@else
<br>
<div class="col s12 center">
  <i class="large material-icons">sentiment_very_dissatisfied</i>
            <h4 class="center"><span class="orange-text">Você ainda não possui cadastro no seu perfil, complete-o.</span></h4>
            <br>
            <button class="btn waves-effect deep-orange" onClick="window.location.href='perfil/create'">Editar o Perfil</button>
</div>
<br>
@endif
</div>

@endsection