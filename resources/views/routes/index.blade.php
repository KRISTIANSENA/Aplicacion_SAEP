<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<h5>Listado de facturas <a href="{{ route('routes.create') }}" class="btn">Crear nueva factura</a></h5>

<table>
    <thead>
    <tr>
        <th>Id de factura</th>
        <th>Nombre del producto</th>
        <th>Cantidad</th>
        <th>Método de pago</th>
        <th>Fecha hora pago</th>
        <th>Id de venta</th>
        <th>Id de Compra</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($routes as $route)
        <tr>
            <td>{{ $route->id}}</td>
            <td>{{ $route->employee_id}}</td>
            <td>{{ $route->assigned_zone}}</td>
            <td>{{ $route->quantity_deliveries}}</td>
            <td>{{ $route->service_time}}</td>
            <td>{{ $route->vehicle_license_plate	}}</td>
            <td>{{ $route->vehicle}}</td>
            <td>{{ $route->bill_id}}</td>
            <td>{{ $route->delivery_id}}</td>
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