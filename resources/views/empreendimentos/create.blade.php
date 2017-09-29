@extends('layouts.control_panel')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="center">Registro de Empreendimento </h1></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('empreendimento.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <label for="name" class="col-md-4 control-label">Nome do Estabelecimento:</label>
                        <div class="col-md-6">
                        <input id="nomeEstab" type="text" class="form-control" name="nomeEstab"required>
                        </div>

                        <label for="dateNasc" class="col-md-4 control-label">CNPJ:</label>
                        <div class="col-md-6">
                            <input id="cnpj" type="text" class="form-control" name="cnpj"required>
                        </div>

                        <label for="inscEst" class="col-md-4 control-label">Inscrição Estadual:</label>
                        <div class="col-md-6">
                            <input id="inscEst" type="text" class="form-control" name="inscEst"required>
                        </div>

                        <label for="cep" class="col-md-4 control-label">CEP</label>
                        <div class="col-md-6">
                            <input id="cep" type="text" class="form-control" name="cep"required>
                        </div>

                        <label for="cidade" class="col-md-4 control-label">Cidade</label>
                        <div class="col-md-6">
                            <input id="cidade" type="text" class="form-control" name="cidade"required>
                        </div>
                        <label for="estado" class="col-md-4 control-label">Estado</label>
                        <div class="col-md-6">
                            <input id="estado" type="text" class="form-control" name="estado"required>
                        </div>
                        <label for="ramoAtiv" class="col-md-4 control-label">Telefone</label>
                        <div class="col-md-6">
                            <input id="ramoAtiv" type="text" class="form-control" name="ramoAtiv"required>
                        </div>
                        <label for="nomeFant" class="col-md-4 control-label">Nome Fantasia</label>
                        <div class="col-md-6">
                            <input id="nomeFant" type="text" class="form-control" name="nomeFant"required>
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

