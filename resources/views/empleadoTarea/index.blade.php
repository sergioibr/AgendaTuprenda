@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <a href="{{route('empleado_tarea.create')}}" class="blue darken-4 waves-effect waves-light btn">Registrar Planilla</a>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                  
                        <th>Acciones</th>
                    </tr>

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var datos = [];
            @foreach($empleado_tareas as $empleado_tarea)
            var fila = [];
            fila[0] = '{{$empleado_tarea->id}}';
            fila[1] = '{{$empleado_tarea->nombre}}';
            fila[2] = '{{$empleado_tarea->descripcion}}';
        
            fila[3] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('empleado_tarea.show', [$empleado_tarea->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('empleado_tarea.edit', [$empleado_tarea->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('empleado_tarea.destroy', [$empleado_tarea->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endsection
