    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
               
        </div>
      @if ($mainPerfil->perfil != null)
<div class="row">
<div class="col l5 center">
</br>
<img class="circle" width="200" height="200" src="{{asset('/images/perfils')}}/{{$mainPerfil->perfil->image}}">
</div>
</br> 



<footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l4 offset-l2 s12">
                        <h4 class="center-align" class="white-text" >MINHAS INFORMAÇÕES</h4>
                        <li class="divider"></li>
                        
                        <ul>
                        <div class="row">
                            <li><a class="grey-text text-lighten-3 col s6">  
                             <label for="email" class="control-label white-text">Seu Email:</label>
                                <h6 class="white-text">{{$mainPerfil->email}}<h6></a></li>

                            <li><a class="grey-text text-lighten-3 col s6"> 
                             <label for="dateNasc" class="control-label white-text">Data de Nascimento:</label>
                                <h6 class="white-text">{{$mainPerfil->dateNasc}}<h6></a></li>

                            <li><a class="grey-text text-lighten-3 col s6"> 
                             <label for="sexo" class="control-label white-text">Sexo:</label>
                                <h6 class="white-text">{{$mainPerfil->perfil->sexo}}<h6></a></li>

                            <li><a class="grey-text text-lighten-3 col s6"> 
                            <label for="rg" class="control-label white-text">Seu RG:</label>
                                <h6 class="white-text">{{$mainPerfil->perfil->rg}}<h6></a></li>

                            <li><a class="grey-text text-lighten-3 col s6">  
                            <label for="cpf" class="control-label white-text">Seu CPF:</label>
                                <h6 class="white-text">{{$mainPerfil->perfil->cpf}}<h6></a></li>

                            <li><a class="grey-text text-lighten-3 col s6"> 
                             <label for="telUm" class="control-label white-text">Seu Telefone:</label>
                                 <h6 class="white-text">{{$mainPerfil->perfil->telUm}}<h6></a></li>

                            <li><a class="grey-text text-lighten-3 col s6"> 
                            <label for="cell" class="control-label white-text">Seu Celular:</label>
                                <h6 class="white-text">{{$mainPerfil->perfil->cell}}<h6></a></li>

                        </ul>
                        
                        </div>
                    </div>
                </div>
                
            </div>
            <button class="btn waves-effect deep-orange align center" onClick="window.location.href='/perfil/{{$mainPerfil->id}}/edit'">Editar o Perfil</button>
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
