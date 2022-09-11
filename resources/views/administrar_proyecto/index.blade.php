@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5 class="mt-2 text-gray-600 dark:text-gray-400 text-md" style="text-align: justify;"><strong>[ Administrar Proyecto ]</strong></h5>
            </div>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/" title="Go back" > <i class="fas fa-backward "></i> </a>
        </div>
    </div>
    <br>
    <form action="{{ route('administrar_proyecto_crear_confirmacion') }}" method="POST" >
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Proyecto:</strong>
                    <select name="proyecto_id" class="form-control">
                        @foreach ($proyectos as $proyecto)
                            <option value="{{$proyecto->id}}">{{$proyecto->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cooperante:</strong>
                    <select name="cooperante_id" class="form-control">
                        @foreach ($cooperantes as $cooperante)
                            <option value="{{$cooperante->id}}">{{$cooperante->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Fecha de asignacion:</strong>
                    <input type="date" name="fecha_asignacion" placeholder="fecha" class="form-control" />
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Monto (en dolares):</strong>
                    <input type="number" name="monto" placeholder="monto" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>
    </br>

@endsection
