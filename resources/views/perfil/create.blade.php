@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
                <h3 class="center"><span class="orange-text">COMPLETE SEU PERFIL DE USUÁRIO</span></h3>
        </div>
                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('perfil.store') }}" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <label for="name" class="col m4 control-label">Nome:</label>
                        <div class="col m6 input-field">
                            <input disabled id="name" type="text" class="form-control" name="name" placeholder="{{$mainUser->name}}">
                        </div>

                        <label for="dateNasc" class="col m4 control-label">Data de Nascimento:</label>
                        <div class="col m6 input-field">
                            <input disabled id="dateNasc" type="text" class="form-control" name="dateNasc" placeholder="{{$mainUser->dateNasc}}">
                        </div>

                        <label for="email" class="col m4 control-label">Email:</label>
                        <div class="col m6 input-field">
                            <input disabled id="email" type="text" class="form-control" name="email" placeholder="{{$mainUser->email}}">
                        </div>


<label for="sexo" class="col m4 control-label">Sexo:</label>
                        <div class="col-md-6">
                          <select name="sexo" id="sexo" class="form-control container">
                           <option value="Masculino">Masculino</option>
                           <option value="Feminino">Feminino</option>
                          </select>
                          </div>
                    </br>

                        <label for="rg" class="col m4 control-label">RG:</label>
                        <div class="col m6 input-field">
                            <input id="rg" type="text" class="form-control rg" name="rg" required placeholder="00.000.000-0" maxlength="12">
                        </div>

                        <label for="cpf" class="col m4 control-label">CPF:</label>
                        <div class="col m6 input-field">
                            <input id="cpf" type="text" class="cpf" name="cpf"required placeholder="000.000.000-00" maxlength="14">
                        </div>

                        <label for="telUm" class="col m4 control-label">Telefone:</label>
                        <div class="col m6 input-field">
                        
                        <input type="text" class="form-control telUm" placeholder="(00) 0000-0000" maxlength="13" id="telUm" name="telUm">                 
                        </div>

                        <label for="cell" class="col m4 control-label">Celular:</label>
                        <div class="col m6 input-field">
                        <input id="cell" type="text" class="form-control cell" placeholder="(00) 00000-0000" maxlength="14" name="cell">
                        </div>

                        <label for="image" class="col m4 control-label">Sua foto de Perfil:</label>
                        <div class="col m6 input-field">
                        <input id="image" type="file" class="form-control image" name="image">
                        </div>

                        <br>

                        <div class="col m6 input-field">
                            <button type="submit" class="btn btn-primary orange darken-4">
                                Cadastrar
                            </button>
                        </div>

                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script>
$(document).ready(function(){
$('#sexo').select2();
$('#cpf').mask('000.000.000-00');
$('#telUm').mask('(00)0000-0000');
$('#cell').mask('(00)90000-0000');
});
</script>

@if($errors->any())
 @foreach ($errors->all() as $error)
    <script>
    var error = "<?=$error?>"
    Materialize.toast(error, 5000);
    </script>
    @endforeach
    @endif
@endsection


