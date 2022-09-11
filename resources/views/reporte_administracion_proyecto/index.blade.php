@extends('layouts.app')

@section('content')
    <script>
       function GenerarReporte() {
            let id = $("#cooperante_id").val();
            let montoTotal = 0;
           resetTablaReporte();
            $.get("/reporte.administracion.proyecto.detalle" + '/' + id, function (data) {
                $.each(data, function (index, item) {
                    $('#reporte tr:last').after('<tr><td>'+item.id+'</td><td>'+item.nombre+'</td><td>'+formatFecha(item.fecha_asignacion)+'</td><td>'+formatMonto(item.monto)+'</td></tr>');
                    montoTotal = montoTotal + item.monto;

                });
                $('#reporte tr:last').after('<tr><td></td><td></td><td><strong>Total</strong></td><td><strong>'+formatMonto(montoTotal)+'</strong></td></tr>');
            });
        };

       function resetTablaReporte(){
           $("#row_tabla").empty();
           $("#row_tabla").append(
               '<table id="reporte" name="reporte" class="table table-bordered table-responsive-md">'+
                   '<thead>'+
                   '<tr>'+
                       '<th>No.</th>'+
                       '<th>Proyecto</th>'+
                       '<th>Fecha Asignacion</th>'+
                       '<th>Monto</th>'+
                   '</tr>'+
                   '</thead>'+
                   '<tbody>'+

                   '</tbody>'+
               '</table>'
           )
       }

       function formatMonto(monto){
           let formatter = new Intl.NumberFormat('en-US', {
               style: 'currency',
               currency: 'USD',
           });

           return formatter.format(monto);
       }

       function formatFecha(fecha){
           [yyyy, mm, dd] = fecha.split(/[/:\-T]/);
           return `${dd}/${mm}/${yyyy}`;
       }

    </script>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5 class="mt-2 text-gray-600 dark:text-gray-400 text-md" style="text-align: justify;"><strong>[ Reporte de Asignacion de Proyectos ]</strong></h5>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/" title="Go back" > <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="text-align: justify;">
                    Cooperante:
                </div>
                <select id="cooperante_id" name="cooperante_id" class="form-control">
                    @foreach ($cooperantes as $cooperante)
                        <option value="{{$cooperante->id}}">{{$cooperante->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <button type="button" onclick="GenerarReporte()" class="btn btn-primary generarReporte">Generar</button>
        </div>
    </div>
    </br>
    <div class="row" id="row_tabla">

    </div>

@endsection
