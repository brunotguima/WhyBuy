@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
                <h3 class="center"><span class="orange-text">CADASTRE A SUA PROMOÇÃO</span></h3>
        </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('promocao.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                         <div class="input-field col s12">
                         <label for="empreendimento">Empreendimento</label>
                            <select>
                            @foreach($empreendimentos as $empreendimento)                            
                                <option value="{{$empreendimento->id}}">{{$empreendimento->nomeFantasia}}</option>
                            @endforeach
                            </select>
                        </div>
                        <label for="nomeProd" class="col m4 control-label">Nome Produto:</label>
                        <div class="col m6 input-field">
                            <input  id="nomeProd" type="text" class="form-control" name="nomeProd" >
                        </div>

                        <label for="marcaProd" class="col m4 control-label">Marca do Produto:</label>
                        <div class="col m6 input-field">
                            <input  id="marcaProd" type="text" class="form-control" name="marcaProd">
                        </div>

                        <label for="valorProd" class="col m4 control-label">Valor do Produto:</label>
                        <div class="col m6 input-field">
                            <input  id="valorProd" type="text" class="form-control" name="valorProd">
                        </div>

                        <label for="categoria" class="col m4 control-label">Categoria do Produto:</label>
                        <div class="col m6 input-field">
                            <input id="categoria" type="text" class="form-control categoria" name="categoria"required>
                        </div>
                        <label for="codProd" class="col m4 control-label">Codigo do Produto:</label>
                        <div class="col m6 input-field">
                            <input id="codProd" type="text" class="codProd" name="codProd"required>
                        </div>
                        
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
<!--@if($errors->any())
 @foreach ($errors->all() as $error)
    <script>
    var error = "<?=$error?>"
    Materialize.toast(error, 5000);
    </script>
    @endforeach
    @endif -->>
 @endsection
    
