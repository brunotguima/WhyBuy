    @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="page-header">
                    Lista de Perfis
                </h1>


                <div class="panel panel-default">
                    <div class="panel-heading">Dados da tabela</div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Data Nascimento</th>
                                    <th>Sexo</th>
                                    <th>RG</th>
                                    <th>CPF</th>
                                    <th>Telefone(1)</th>
                                    <th>Celular</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($perfils as $perfil)
                                <tr>
                                    <td>{{$perfil->id}}</td>
                                    <td>{{$perfil->nome}}</td>
                                    <td>{{$perfil->ano}}</td>
                                    <td>{{$perfil->rg}}</td>
                                    <td>{{$perfil->cpf}}</td>
                                    <td>{{$perfil->sexo}}</td>
                                    <td>{{$perfil->telUm}}</td>
                                    <td>{{$perfil->cell}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/perfils/{{$perfil->id}}/edit">
                                            Editar
                                        </a>

                                        <form style="display: inline;" action="{{route('perfils.destroy', $perfil->id)}}" method="post">
                                        
                                             {{csrf_field()}}

                                            <input type="hidden" name="_method" value="delete">

                                            <button class="btn btn-danger">Apagar</button>

                                        </form>
                                       
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                         <a href="/perfil/create" class="btn btn-primary">Cadastrar</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
