<!DOCTYPE html>
<html>
<title>Reporte Tarea </title>
<head>
    <style>
        table{
            font-family:arial,sans-serif;
            border-collapse:collapse;
            width:100%;
        }
        td,th{
            border:1px solid #dddddd;
            text-align: left;
            padding:8px;
        }
        tr:nth-child(even){
            background-color:#dddddd;
        }
    </style>
</head>
<body>
<h2>Reporte de Tareas</h2>
<table>
    <tr>

        <th>Descripcion</th>
        <th>Estado</th>
        <th>Duracion Estimada</th>
        <th>Duracion Real</th>
        <th>Fecha de Registro</th>
        <th>Tipo</th>

    </tr>
    @foreach($tareas as $tarea)
        <tr>
            <td>{{$tarea->descripcion}}</td>
            <td>{{$tarea->estado}}</td>
            <td>{{$tarea->duracionEstimada}}</td>
            <td>{{$tarea->duracionReal}}</td>
            <td>{{$tarea->fecha_tarea}}</td>
            <td>{{$tarea->tipo_tarea}}</td>

        </tr>
    @endforeach
</table>

</body>
</html>
