    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
               
        </div>
      @if ($mainPerfil->perfil != null)
</br>
</br> 



<footer class="page-footer">
            <div class="container">
                <div class="col l4 align left">
                <img class="circle" width="150" height="150" src="{{asset('/publicimages/perfils')}}/{{$mainPerfil->perfil->image}}">
<br />
<br />
                <div class="row center">
                <button class="btn waves-effect deep-orange align center" onClick="window.location.href='perfil/{{$mainPerfil->perfil->id}}/edit'">Editar o Perfil</button>
                </div>
                </div>
                <div class="row">
                    <div class="col l8 ">
                        <h4 class="center-align" class="white-text" >MINHAS INFORMAÇÕES</h4>
                        <li class="divider"></li>
                        
                        <ul>
                        <div class="row col s12">
                            <div align="center">
                            <li><a class="grey-text text-lighten-3 col s12">  
                             <label for="email" class="control-label white-text">* Seu Email:</label>
                                <h7 class="white-text">{{$mainPerfil->email}}<h7></a></li>
                                <br />
                               
                                

                            <li><a class="grey-text text-lighten-3 col s12"> 
                             <label for="dateNasc" class="control-label white-text">* Data de Nascimento:</label>
                                <h7 class="white-text">{{$mainPerfil->dateNasc}}<h7></a></li>
                                <br />
                                
                                

                            <li><a class="grey-text text-lighten-3 col s12"> 
                             <label for="sexo" class="control-label white-text">* Sexo:</label>
                                <h7 class="white-text">{{$mainPerfil->perfil->sexo}}<h7></a></li>
                                <br />
                                

                            <li><a class="grey-text text-lighten-3 col s12"> 
                            <label for="rg" class="control-label white-text">* Seu RG:</label>
                                <h7 class="white-text">{{$mainPerfil->perfil->rg}}<h7></a></li>
                                <br />
                               

                            <li><a class="grey-text text-lighten-3 col s12">  
                            <label for="cpf" class="control-label white-text">* Seu CPF:</label>
                                <h7 class="white-text">{{$mainPerfil->perfil->cpf}}<h7></a></li>
                                <br />
                                

                            <li><a class="grey-text text-lighten-3 col s12"> 
                             <label for="telUm" class="control-label white-text">* Seu Telefone:</label>
                                 <h7 class="white-text">{{$mainPerfil->perfil->telUm}}<h7></a></li>
                                 <br />
                                 

                            <li><a class="grey-text text-lighten-3 col s12 "> 
                            <label for="cell" class="control-label white-text">Seu Celular:</label>
                                <h7 class="white-text">{{$mainPerfil->perfil->cell}}<h7></a></li>

                        </ul>
                        
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
</div>


@else
<br>
<div class="col s12 center">
  <i class="large material-icons orange-text">sentiment_very_dissatisfied</i>
            <h4 class="center"><span class="orange-text">Você ainda não possui cadastro no seu perfil, complete-o.</span></h4>
            <br>
            <button class="btn waves-effect deep-orange" onClick="window.location.href='perfil/create'">Editar o Perfil</button>
</div>
<br>
@endif
</div>
@endsection
