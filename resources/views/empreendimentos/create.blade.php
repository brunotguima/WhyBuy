@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="center">Registro de Empreendimento </h1></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('empreendimentos.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <label for="name" class="col-md-4 control-label">Nome Fantasia:</label>
                        <div class="col-md-6">
                        <input id="nomeFantasia" type="text" class="form-control" name="nomeFantasia"required>
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
                        <label for="telUm" class="col-md-4 control-label">Telefone</label>
                        <div class="col-md-6">
                            <input id="telUm" type="text" class="form-control" name="telUm"required>
                        </div>
                        <label for="ramoAtiv" class="col-md-4 control-label">Ramo de Atividade</label>
                        <div class="col-md-6">
                            <input id="ramoAtiv" type="text" class="form-control" name="ramoAtiv"required>
                        </div>
                        <label for="razaoSocial" class="col-md-4 control-label">Razão Social</label>
                        <div class="col-md-6">
                            <input id="razaoSocial" type="text" class="form-control" name="razaoSocial"required>
                        </div>
                        <label for="EmpImage" class="col-md-4 control-label">Empreendimento Foto</label>
                        <div class="col-md-6">
                        <input id="EmpImage" type="file" class="form-control" name="EmpImage">
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


