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

<h5>Listado de clientes <a href="{{ route('customers.create') }}" class="btn">Crear nuevo Producto</a></h5>

<table>
    <thead>
    <tr>
        <th> id del cliente </th>
        <th>id del usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Tipo de identificacion</th>
        <th>numero de identificacion</th>
        <th>Nombre del negocio</th>
        <th>Telefono </th>
        <th> Direccion</th>

        <th>acciones </th>
    </tr>
    </thead>



    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->user_id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->last_name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->identification_type}}</td>
            <td>{{$customer->identification_number}}</td>
            <td>{{$customer->business_name}}</td>
            <td>{{$customer->telephone}}</td>
            <td>{{$customer->address}}</td>
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
