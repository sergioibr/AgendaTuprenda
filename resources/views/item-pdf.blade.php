<!DOCTYPE html>
<html>
<title>Reporte Item </title>
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
<h2>Reporte de Items</h2>
<table>
    <tr>

        <th>Numero</th>
        <th>Nombre</th>
        <th>Descripion</th>

    </tr>
    @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->descripcion}}</td>


        </tr>
    @endforeach
</table>

</body>
</html>
