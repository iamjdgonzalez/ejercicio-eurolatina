@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5 class="mt-2 text-gray-600 dark:text-gray-400 text-md" style="text-align: justify;"><strong>[ Catálogo de Proyectos ]</strong></h5>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('proyecto_crear') }}" title="Crear Proyecto"> Agregar <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    </br>
    <table class="table table-bordered table-responsive-md">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Tecnologias</th>
            <th>Acciones</th>
        </tr>
        @foreach ($proyectos as $proyecto)
            <tr>
                <td>{{ $proyecto->id }}</td>
                <td>{{ $proyecto->nombre }}</td>
                <td>{{ $proyecto->descripcion }}</td>
                <td>{{ $proyecto->tecnologias}}</td>
                <td>
                    <form action="" method="POST">
                        <a href="{{ route("proyecto_editar", ['id' => $proyecto->id]) }}" >
                            <i class="fas fa-edit fa-lg"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ route("proyecto_eliminar", ['id' => $proyecto->id]) }}" >
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </a>


                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
