@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="center"><span class="orange-text text-darken-2 center">SUPORTE</span><h2>
            <div class="col s5 m5 l5">
                <div class="container">
                    <h5 class="center">Envie um email com sugestões, criticas, e duvidas sobre o uso de nossa aplicação. Envie seu nome e mail para retornarmos sua mensagem. A equipe FOX developers agradece o contato.</h5>
                </div>
            </div>
            <div class="col s5 m5 l5">
                <form action="{{route('suporte.post')}}" method="post">
                    {{csrf_field()}}
                    <label for="name" class="control-label">Nome Completo:</label>
                    <input disabled id="name" type="text" class="form-control" name="name" placeholder="{{$mainUser->name}}">

                    <label for="email" class="control-label">Email:</label>
                    <input disabled id="email" type="text" class="form-control" name="email" placeholder="{{$mainUser->email}}">

                    <label for="mensagem" class="control-label">Digite sua mensagem:</label>
                    <textarea id="mensagem" type="text" class="materialize-textarea" name="mensagem" placeholder="Digite sua mensagem!" required autofocus></textarea>

                    <button type="submit" class="btn btn-primary orange darken-4">
                        Enviar!
                    </button>
                </form>
            </div>
            </div>
    @if(Session::has('sucess'))
    <script>Materialize.toast('Sua mensagem foi enviada com sucesso e responderemos em breve!!', 4000);</script>
    @endif
            @endsection