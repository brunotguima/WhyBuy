@extends('layouts.control_panel')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="center">Registre o perfil do seu Usuário</h1></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('perfil.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <label for="name" class="col-md-4 control-label">Nome:</label>
                        <div class="col-md-6">
                            <p>{{$mainUser->name}}</p>
                        </div>

                        <label for="dateNasc" class="col-md-4 control-label">Data de Nascimento:</label>
                        <div class="col-md-6">
                            <p>{{$mainUser->dateNasc}}</p>
                        </div>

                        <label for="email" class="col-md-4 control-label">Email:</label>
                        <div class="col-md-6">
                            <p>{{$mainUser->email}}</p>
                        </div>

                        <label for="sexo" class="col-md-4 control-label">Sexo</label>
                        <div class="col-md-6">
                            <input id="sexo" type="text" class="form-control" name="sexo"required>
                        </div>
                        <label for="rg" class="col-md-4 control-label">RG</label>
                        <div class="col-md-6">
                            <input id="rg" type="text" class="form-control" name="rg"required>
                        </div>
                        <label for="cpf" class="col-md-4 control-label">CPF</label>
                        <div class="col-md-6">
                            <input id="cpf" type="text" class="form-control" name="cpf"required>
                        </div>
                        <label for="telUm" class="col-md-4 control-label">Telefone</label>
                        <div class="col-md-6">
                            <input id="telUm" type="text" class="form-control" name="telUm"required>
                        </div>
                        <label for="cell" class="col-md-4 control-label">Celular</label>
                        <div class="col-md-6">
                            <input id="cell" type="text" class="form-control" name="cell"required>
                        </div>
                        <label for="image" class="col-md-4 control-label">Sua foto de Perfil</label>
                        <div class="col-md-6">
                        <input id="image" type="file" class="form-control" name="image">
                        </div>
                        <div class="col-md-6 col-md-offset-4">
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
@endsection


