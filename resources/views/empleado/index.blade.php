@extends('layouts.tecno_app')
@section('contenido')
<div class="row">
        <a href="{{route('empleado.create')}}" class="blue darken-4 waves-effect waves-light btn">Registrar Empleado</a>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>C.I.</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Cargo</th>
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
            @foreach($empleados as $empleado)
            var fila = [];
            fila[0] = '{{$empleado->id}}';
            fila[1] = '{{$empleado->persona->carnet_identidad}}';
            fila[2] = '{{$empleado->persona->nombre}}';
            fila[3] = '{{$empleado->persona->apellido_paterno}}';
            fila[4] = '{{$empleado->persona->apellido_materno}}';
            fila[5] = '{{$empleado->cargo}}';
            fila[6] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('empleado.show', [$empleado->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('empleado.edit', [$empleado->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('empleado.destroy', [$empleado->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endsection
