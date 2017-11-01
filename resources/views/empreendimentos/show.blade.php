@extends('layouts.app')
@section('content')

<div class="container">
 @foreach($empreendimento as $emp)
    <div class="row">
        </div>
<div class="row">
<div class="col s4 center">
</br>
</div>
</br>
    <div class="col s12 center">
    <div class="row">
        <div class="card-panel orange">
          <span class="white-text"> {{$emp->nomeFantasia}}
          </span>
      </div>
    </div>
    <footer class="page-footer">
            <div class="container">
                <img class="circle center-align" width="150" height="150" src="{{asset('/images/empreendimentos')}}/{{$emp->EmpImage}}">
<br />
<br />

<div class="row center">
                
                <div class="row">
                    
                        <h4 class="center-align" class="white-text" >INFORMAÇÕES DO EMPREENDEDORISMO</h4>
                        <li class="divider"></li>
                        
                        <ul>
                            <div class="center-align">
                            <li>  
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
            <h7 class="white-text">{{$emp->RamoAtivEmpreendimento->name}}
@endforeach
                               
                        </ul>
                    
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
</div>
