@extends('layouts.tecno_app')
@section('contenido')
@if (@auth()->user()->rol === 'Admin')
    <div class="row">
        <a href="{{route('tarea.create')}}" class="blue darken-4 waves-effect waves-light btn">Registrar Tarea</a>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Duracion Estimada</th>
                        <th>Estado</th>
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
            @foreach($tareas as $tarea)
            var fila = [];
            fila[0] = '{{$tarea->id}}';
            fila[1] = '{{$tarea->descripcion}}';
            fila[2] = '{{$tarea->duracionEstimada}}';
            fila[3] = '{{$tarea->estado}}';
     
            fila[4] = '<div>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('tarea.edit', [$tarea->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('tarea.destroy', [$tarea->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endif
@if (@auth()->user()->rol === 'Cliente')
<div class="row">
        <a href="{{route('tarea.create')}}" class="blue darken-4 waves-effect waves-light btn">Registrar Tarea</a>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Duracion Estimada</th>
                        <th>Estado</th>
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
            @foreach($tareas as $tarea)
            var fila = [];
            fila[0] = '{{$tarea->id}}';
            fila[1] = '{{$tarea->descripcion}}';
            fila[2] = '{{$tarea->duracionEstimada}}';
            fila[3] = '{{$tarea->estado}}';
     
            fila[4] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('tarea.show', [$tarea->id])}}" + ' " class="white-text" >Detalle</a></span>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endif
@if (@auth()->user()->rol === 'Empleado')
    <div class="row">
        <a href="{{route('tarea.create')}}" class="blue darken-4 waves-effect waves-light btn">Registrar Tarea</a>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Duracion Estimada</th>
                        <th>Estado</th>
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
            @foreach($tareas as $tarea)
            var fila = [];
            fila[0] = '{{$tarea->id}}';
            fila[1] = '{{$tarea->descripcion}}';
            fila[2] = '{{$tarea->duracionEstimada}}';
            fila[3] = '{{$tarea->estado}}';
     
            fila[4] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('tarea.show', [$tarea->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('tarea.edit', [$tarea->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('tarea.destroy', [$tarea->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endif
@endsection
