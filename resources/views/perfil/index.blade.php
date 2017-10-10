    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <h3 class="center"><span class="orange-text">SUAS INFORMAÇÕES</span></h3>
        </div>
        @if ($mainPerfil->perfil != null)
<div class="row">
<div class="col s4 center">
</br>
<img class="circle" width="200" height="200" src="{{asset('/images/perfils')}}/{{$mainPerfil->perfil->image}}">
<h5 class="orange-text">{{$mainPerfil->name}}</h5>
<button class="btn waves-effect deep-orange" onClick="window.location.href='perfil/edit'">Editar o Perfil</button>
</div>
</br>
    <div class="col s8 center">
            <label for="email" class="control-label">Seu Email:</label>
            <h5 class="black-text">{{$mainPerfil->email}}<h5>

            <label for="dateNasc" class="control-label">Sua Data de Nascimento:</label>
            <h5 class="black-text">{{$mainPerfil->dateNasc}}<h5>

            <label for="sexo" class="control-label">Sexo:</label>
            <h5 class="black-text">{{$mainPerfil->perfil->sexo}}<h5>

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
            <h3 class="center"><span class="black-text">Você ainda não possui cadastro no seu perfil, complete-o.</span></h3>
            <button class="btn waves-effect deep-orange" onClick="window.location.href='perfil/create'">Editar o Perfil</button>
</div>
<br>
@endif
</div>
@endsection
