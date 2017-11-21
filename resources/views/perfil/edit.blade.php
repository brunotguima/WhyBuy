@extends('layouts.app') @section('content')
<<<<<<< HEAD
=======

>>>>>>> 61da972b8367c68189ba78541ee29635cb9fd548
<div class="container">
    <div class="row">
        <h1 class="page-header">Edição de Perfil</h1>
        <div class="col-md-6">
            <form action="{{ route('perfil.update', $perfil->id) }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="image">Imagem de Perfil</label>
                    </br>
<<<<<<< HEAD
                    <input id="image" class="form-control" type="file" name="image" value="{{$perfil->image}}">
=======
                    <input id="image" class="form-control" type="file" name="image" value="{{$perfil-> image}}">
>>>>>>> 61da972b8367c68189ba78541ee29635cb9fd548

                </div>
                <input type="hidden" name="_method" value="put">
        </div>
        <div class="form-group">
            <label for="telUm">Telefone</label>
            <input id="telUm" class="form-control" type="text" placeholder="(00) 0000-0000" OnKeyPress="formatar('##-####-####', this)"
                maxlength="12" name="telUm" value="{{$perfil->telUm}}">

        </div>
        <div class="form-group">
            <label for="cell">Celular</label>
            <input id="cell" class="form-control" type="text" placeholder="(00) 00000-0000" OnKeyPress="formatar('##-#####-####', this)"
                maxlength="13" name="cell" value="{{$perfil->cell}}">

        </div>
        <button type="submit" class="btn btn-primary deep-orange">Enviar</button>
        </form>
    </div>
</div>
@endsection