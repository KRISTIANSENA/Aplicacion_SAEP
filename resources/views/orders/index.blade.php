<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h5>Listado de Entregas <a href="{{ route('orders.create') }}" class="btn">Crear nueva Entrega</a></h5>

<table>
    <thead>
    <tr>
        <th>Numero de Orden</th>
        <th>Nombre de proveedores</th>
        <th>Nombre de producto</th>
        <th>Fecha y hora de pedido</th>
        <th>Fecha y hora de recibido</th>
        <th>Estado</th>
        <th>Cantidad</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{ $order->id}}</td>
            <td>{{ $order->provider_id}}</td>
            <td>{{ $order->product_id}}</td>
            <td>{{ $order->date_time_order}}</td>
            <td>{{ $order->date_time_received}}</td>
            <td>{{ $order->state}}</td>
            <td>{{ $order->amount}}</td>

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