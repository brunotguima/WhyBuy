@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
                         <h1 class="page-header">Edição de Perfil</h1>
            <div class="col-md-6">
                <form action="{{ route('perfil.update', $perfil->id) }}" method="post">
                    {{csrf_field()}}
                     <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input id="cpf" class="form-control" type="text" name="cpf" value="{{$perfil->cpf}}">

                    </div>
                    <div class="form-group">
                        <label for="rg">RG</label>
                        <input id="rg" class="form-control" type="text" name="rg" value="{{$perfil->rg}}">

                    </div>

                    <input type="hidden" name="_method" value="put">
            </div>
                    <div class="form-group">
                        <label for="telUm">Telefone</label>
                        <input id="telUm" class="form-control" type="text" name="telUm" value="{{$perfil->telUm}}">

                    </div>
                    <div class="form-group">
                        <label for="cell">Celular</label>
                        <input id="cell" class="form-control" type="text" name="cell" value="{{$perfil->cell}}">

                    </div>                 
                    <button type="submit" class="btn btn-primary deep-orange">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection