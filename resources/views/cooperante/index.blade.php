@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5  class="mt-2 text-gray-600 dark:text-gray-400 text-md" style="text-align: justify;"><strong>[ Catálogo de Cooperantes ]</strong></h5>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cooperante_crear') }}" title="Crear Cooperante"> Agregar <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    </br>
    <table class="table table-bordered table-responsive-md">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>email</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>
        @foreach ($cooperantes as $cooperante)
            <tr>
                <td>{{ $cooperante->id }}</td>
                <td>{{ $cooperante->nombre }}</td>
                <td>{{ $cooperante->email }}</td>
                <td>{{ $cooperante->direccion}}</td>
                <td>
                    <form action="" method="POST">
                        <a href="{{ route("cooperante_editar", ['id' => $cooperante->id]) }}" >
                            <i class="fas fa-edit fa-lg"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ route("cooperante_eliminar", ['id' => $cooperante->id]) }}" >
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </a>


                    </form>
                </td>
            </tr>
        @endforeach
    </table>



@endsection
