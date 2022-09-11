@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5 class="mt-2 text-gray-600 dark:text-gray-400 text-md" style="text-align: justify;"><strong>[ Edicion de Cooperante ]</strong></h5>
            </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="/cooperante" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @foreach ($cooperante as $elemento)
    <form action="{{ route('cooperante_editar_confirmacion',  ['id' => $elemento->id]) }}" method="POST">
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
                        Email:
                    </div>
                    <input type="text" name="email" value = "{{$elemento->email}}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                        Direccion
                    </div>
                    <textarea class="form-control" style="height:100px" name="direccion"
                              placeholder="Direccion">{{$elemento->direccion}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>
    @endforeach
@endsection
