@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading "><h1 class="center">LOGIN</h1></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <label for="email" class="col-md-4 control-label">Endereço de E-Mail</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        </div>

                        <label for="password" class="col-md-4 control-label">Senha</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                </label>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary orange darken-4">
                                Login
                            </button>
                            <a class="btn btn-link orange darken-4" href="{{ route('password.request') }}">
                                Esqueceu sua senha?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
