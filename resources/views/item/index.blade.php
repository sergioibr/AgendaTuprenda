@extends('layouts.tecno_app')
@section('contenido')
@if (@auth()->user()->rol === 'Admin')
    <div class="row">
        <a href="{{route('item.create')}}" class="blue darken-4 waves-effect waves-light btn">Registrar Item</a>
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
            @foreach($items as $item)
            var fila = [];
            fila[0] = '{{$item->id}}';
            fila[1] = '{{$item->nombre}}';
            fila[2] = '{{$item->descripcion}}';
            fila[3] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('item.show', [$item->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('item.edit', [$item->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('item.destroy', [$item->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endif
@if (@auth()->user()->rol === 'Empleado')
    <div class="row">
        <a href="{{route('item.create')}}" class="blue darken-4 waves-effect waves-light btn">Registrar Item</a>
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
            @foreach($items as $item)
            var fila = [];
            fila[0] = '{{$item->id}}';
            fila[1] = '{{$item->nombre}}';
            fila[2] = '{{$item->descripcion}}';
            fila[3] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('item.show', [$item->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge deep-orange darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('item.edit', [$item->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge red darken-4" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('item.destroy', [$item->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endif
@endsection
