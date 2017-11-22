@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading orange-text">
                    <h1 class="center ">Registro de Empreendimento</h1>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('empreendimentos.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        </br>
                        <div class="center">
                            <label>Informações Básicas:</label>
                        </div>
                        </br>
                        <label for="ramoAtiv" class="col m4 control-label">Ramo de Atividade:</label>
                        <div class="col-md-6">
                            <select name="ramoAtiv" id="ramoAtiv" class="form-control container">
                                @foreach($ramoAtividade as $ramoAtiv)
                                <option value="{{$ramoAtiv->id}}">{{$ramoAtiv->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        </br>
                        <label for="nomeFantasia" class="col-md-4 control-label">* Nome Fantasia:</label>
                        <div class="col-md-6">
                            <input id="nomeFantasia" type="text" class="form-control" name="nomeFantasia" required required placeholder="Nome Fantasia">
                        </div>

                        <label for="cnpj" class="col-md-4 control-label">* CNPJ:</label>
                        <div class="col-md-6">
                            <input id="cnpj" type="text" class="form-control" name="cnpj" required required placeholder="00.000.000/0000-00" OnKeyPress="formatar('##.###.###/####-##', this)"
                                maxlength="18">
                        </div>

                        <label for="inscEst" class="col-md-4 control-label">* Inscrição Estadual:</label>
                        <div class="col-md-6">
                            <input id="inscEst" type="text" class="form-control" name="inscEst" required required placeholder="000.000.000.000" OnKeyPress="formatar('000.000.000.000', this)"
                                maxlength="15">
                        </div>

                        <label for="telUm" class="col-md-4 control-label">* Telefone:</label>
                        <div class="col-md-6">
                            <input id="telUm" type="text" class="form-control" name="telUm" required placeholder="(00) 0000-0000" OnKeyPress="formatar('##-####-####', this)"
                                maxlength="12">
                        </div>

                        <label for="razaoSocial" class="col-md-4 control-label">* Razão Social:</label>
                        <div class="col-md-6">
                            <input id="razaoSocial" type="text" class="form-control" name="razaoSocial" required required placeholder="Razão Social">
                        </div>

                        <label for="EmpImage" class="col-md-4 control-label">Logotipo:</label>
                        <div class="col-md-6">
                            <input id="EmpImage" type="file" class="form-control" name="EmpImage">
                        </div>

                        </br>
                        <div class="center">
                            <label>Informações de Endereçamento:</label>
                        </div>
                        </br>

                        <label for="cep" class="col-md-4 control-label">* CEP:</label>
                        <div class="col-md-6">
                            <input id="cep" type="text" class="form-control" name="cep"required required placeholder="00000-000" OnKeyPress="formatar('00000-000', this)"  maxlength="9">
                        </div>

                        <label for="endereco" class="col-md-4 control-label">* Endereço:</label>
                        <div class="col-md-6">
                            <input id="endereco" type="text" class="form-control" name="endereco" required placeholder="Av. Brasil, 50, Santa Cruz">
                        </div>

                        <label for="cidade" class="col-md-4 control-label">* Cidade:</label>
                        <div class="col-md-6">
                            <input id="cidade" type="text" class="form-control" name="cidade" required placeholder="Mogi Mirim">
                        </div>

                        <label for="estado" class="col-md-4 control-label">* Estado:</label>
                        <div class="col-md-6">
                            <input id="estado" type="text" class="form-control" name="estado" required placeholder="São Paulo">
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
<script>
    function formatar(mascara, documento) {
        var i = documento.value.length;
        var saida = mascara.substring(0, 1);
        var texto = mascara.substring(i)

        if (texto.substring(0, 1) != saida) {
            documento.value += texto.substring(0, 1);
        }

    }
</script>
<script>
    $(document).ready(function () {
        $('#ramoAtiv').select2();
    });
</script> @if($errors->any()) @foreach ($errors->all() as $error)
<script>
    var error = "<?=$error?>"
    Materialize.toast(error, 5000);
</script> @endforeach @endif @endsection