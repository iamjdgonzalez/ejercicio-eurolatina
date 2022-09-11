@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5 class="mt-2 text-gray-600 dark:text-gray-400 text-md" style="text-align: justify;"><strong>[ Edicion de Proyecto ]</strong></h5>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="/proyecto" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @foreach ($proyecto as $elemento)
        <form action="{{ route('proyecto_editar_confirmacion',  ['id' => $elemento->id]) }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                            Nombre:
                        </div>
                        <input type="text" name="nombre" value="{{$elemento->nombre}}" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                            Descripcion
                        </div>
                        <input type="text" name="descripcion" value = "{{$elemento->descripcion}}" class="form-control" placeholder="descripcion">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                            Tecnologias
                            </div>
                        <textarea class="form-control" style="height:100px" name="tecnologias"
                                  placeholder="Direccion">{{$elemento->tecnologias}}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>

        </form>
    @endforeach
@endsection
