@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
                         <h1 class="page-header">Edição de promocao</h1>
            <div class="col-md-6">
                <form action="{{ route('promocao.update', $promocao->id) }}" method="post">
                    {{csrf_field()}}
                     
                    <div class="form-group">
                        <label for="nomeProd">Nome do Produto</label>
                        <input id="nomeProd" class="form-control" type="text" name="nomeProd" value="{{$promocao->nomeProd}}">

                    </div>
                    <div class="form-group">
                        <label for="marcaProd">Marca do Produto</label>
                        <input id="marcaProd" class="form-control" type="text" name="marcaProd" value="{{$promocao->marcaProd}}">

                    </div>     
                     <div class="form-group">
                        <label for="valorProd">Celular</label>
                        <input id="valorProd" class="form-control" type="text" name="valorProd" value="{{$promocao->valorProd}}">

                    </div>                 
                    <button type="submit" class="btn btn-primary deep-orange">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection