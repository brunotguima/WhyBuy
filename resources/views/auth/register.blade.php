@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="center">Registro</h1></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <label for="name" class="col-md-4 control-label">Nome Completo</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Insira seu nome aqui!" required autofocus>
                        </div>

                        <label for="dateNasc" class="col-md-4 control-label">Data de Nascimento</label>
                        <div class="col-md-6">
                            <input id="dateNasc" type="date" class="form-control" name="dateNasc" required>
                        </div>

                        <label for="email" class="col-md-4 control-label">Endereço de E-Mail</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com" required>
                        </div>

                        <label for="password" class="col-md-4 control-label">Senha</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" placeholder="********" required>
                        </div>

                        <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="********" required>
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
