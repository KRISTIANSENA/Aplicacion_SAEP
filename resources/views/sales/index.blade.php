<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>

<h5>Listado de Productos <a href="{{ route('products.create') }}" class="btn">Crear nuevo Producto</a></h5>

<table>
    <thead>
    <tr>
        <th>Id  </th>
        <th>Id del empleado</th>
        <th>Hora de venta </th>
        <th> Hora de empaque</th>
        <th>Hora de despache</th>
        <th>acciones </th>
    </tr>
    </thead>

    <tbody>
    @foreach($sales as $sale)
        <tr>

            <td>{{ $sale->id}}</td>
            <td>{{ $sale->employee_id}}</td>
            <td>{{$sale->date_time_sale}}</td>
            <td>{{$sale->date_time_packing}}</td>
            <td>{{ $sale->date_time_dispatch}}</td>

            <td>
                <a class="waves-effect waves-light btn blue darken-1">Detalles</a>
                <a class="waves-effect waves-light btn orange darken-4">Editar</a>
                <a class="waves-effect waves-light btn deep-orange accent-4">Eliminar</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>
