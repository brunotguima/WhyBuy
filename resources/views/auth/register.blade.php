@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="center">Registro</h1></div>

                <div class="panel-body">
                {!! Form::open(['url' => 'foo/bar', 'method' => 'POST', 'action'=> route('register')]) !!} 

                <div class="col-md-6 form-group">
                {!! Form::label('name', 'Seu nome completo:', array('class' => 'control-label' )) !!} 
                {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Insira seu nome aqui!','required']) !!}
                </div>
                                <div class="col-md-6 form-group">
                {!! Form::label('email', 'Seu Email:', array('class' => 'control-label' )) !!} 
                {!! Form::text('email', null, ['class' => 'form-control','placeholder'=>'seunome@dominio.com','required']) !!}
                </div>

                <div class="col-md-6 form-group">
                {!! Form::label('dateNasc', 'Sua data de Nascimento:', array('class' => 'control-label' )) !!} 
                {!! Form::text('dateNasc', null, ['class' => 'form-control','placeholder'=>'dd/mm/aaaa','required']) !!}
                </div>  

                                <div class="col-md-6 form-group">
                {!! Form::label('password', 'Digite uma senha:', array('class' => 'control-label' )) !!} 
                {!! Form::password('password', null, ['class' => 'form-control','required']) !!}
                </div>

                                                <div class="col-md-6 form-group">
                {!! Form::label('password-confirm', 'Confirme a senha:', array('class' => 'control-label' )) !!} 
                {!! Form::password('password-confirm', null, ['class' => 'form-control','name'=>'password_confirmation','required']) !!}
                </div>
                
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary orange darken-4">
                                Cadastrar
                            </button>
                        </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
  $('.dateNasc').mask('00/00/0000');
});
    </script>
@endsection
