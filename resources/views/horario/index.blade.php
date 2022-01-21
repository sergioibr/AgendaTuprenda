@extends('layouts.tecno_app')
@section('contenido')
@if (@auth()->user()->rol === 'Admin')
    <div class="row">
        <a href="{{route('horario.create')}}" class="blue darken-4 waves-effect waves-light btn">Registrar Horario</a>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Turno</th>
                        <th>Duracion</th>
                        <th>Horas Extra</th>
                        <th>Persona</th>
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
            @foreach($horarios as $horario)
            var fila = [];
            fila[0] = '{{$horario->id}}';
            fila[1] = '{{$horario->turno}}';
            fila[2] = '{{$horario->duracion}}';
            fila[3] = '{{$horario->cantidad_extra}}';
            fila[4] = '{{$horario->persona->nombre}}';
     
            fila[5] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('horario.show', [$horario->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('horario.edit', [$horario->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('horario.destroy', [$horario->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endif
@if (@auth()->user()->rol === 'Empleado')

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Turno</th>
                        <th>Duracion</th>
                        <th>Horas Extra</th>
                        <th>Persona</th>
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
            @foreach($horarios as $horario)
            var fila = [];
            fila[0] = '{{$horario->id}}';
            fila[1] = '{{$horario->turno}}';
            fila[2] = '{{$horario->duracion}}';
            fila[3] = '{{$horario->cantidad_extra}}';
            fila[4] = '{{$horario->persona->nombre}}';
     
            fila[5] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('horario.show', [$horario->id])}}" + ' " class="white-text" >Detalle</a></span>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endif
@endsection
