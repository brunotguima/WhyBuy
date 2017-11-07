@extends('layouts.app') @section('content')

<div class="container">
    @foreach($empreendimento as $emp)
    <div class="row">
        <div class="col s6">
            </br>
            </br>
            <div class="row left">
                <div class="card-panel orange" style="width: 650px; height: 450px;">
                    <h4 class="center-align" class="white-text">INFORMAÇÕES DO EMPREENDEDORISMO</h4>
                    <li class="divider"></li>
                    <div class="row">
                        <div class="col l6">
                    <img class="circle right" width="200" height="200" src="{{asset('/images/empreendimentos')}}/{{$emp->EmpImage}}">
                        </div>
                    <div class="left col l6">
                        <label for="nomeFantasia" class="control-label white-text ">Nome Fantasia:</label>
                        <h7 class="white-text">{{$emp->nomeFantasia}}</h7>
                        <br />

                        <label for="cnpj" class="control-label white-text">CNPJ:</label>
                        <h7 class="white-text">{{$emp->cnpj}}</h7>
                        <br />

                        <label for="inscEst" class="control-label white-text">Inscrição Estadual:</label>
                        <h7 class="white-text">{{$emp->inscEst}}</h7>
                        <br />

                        <label for="cep" class="control-label white-text">CEP:</label>
                        <h7 class="white-text">{{$emp->cep}}</h7>
                        <br />

                        <label for="cidade" class="control-label white-text">Cidade:</label>
                        <h7 class="white-text">{{$emp->cidade}}</h7>
                        <br />

                        <label for="estado" class="control-label white-text">Estado:</label>
                        <h7 class="white-text">{{$emp->estado}}</h7>
                        <br />

                        <label for="razaoSocial" class="control-label white-text">Razão Social:</label>
                        <h7 class="white-text">{{$emp->razaoSocial}}</h7>
                        <br />

                        <label for="ramoAtiv" class="control-label white-text">Ramo de Atividade:</label>
                        <h7 class="white-text">{{$ramoAtividade->name}}
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col s6 center">
            </br>
            </br>
            </br>
            <div style="width: 650px; height: 450px; inline-size: relative;">
                {!!Mapper::render()!!}
            </div>
        </div>
    </div>
</div>
@endforeach @endsection