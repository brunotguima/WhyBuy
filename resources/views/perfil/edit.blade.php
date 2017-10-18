<div class="container">
        <div class="row">

            <h1 class="page-header">Edição de Perfil</h1>

            <div class="col-md-6">
                <form action="{{ route('perfil.edit', $mainPerfil->perfil->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">
            </div>
                    <div class="form-group">
                        <label for="telUm">Telefone</label>
                        <input id="telUm" class="form-control" type="text" name="telUm" value="{{$mainPerfil->perfil>telUm}}">

                    </div>
                    <div class="form-group">
                        <label for="cell">Celular</label>
                        <input id="cell" class="form-control" type="text" name="cell" value="{{$mainPerfil->perfil>cell}}">

                    </div>
                    
                   
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
