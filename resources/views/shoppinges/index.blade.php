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
    
<h5>Listado de facturas <a href="{{ route('shoppinges.create') }}" class="btn">Crear nueva factura</a></h5>

<table>
    <thead>
    <tr>
        <th>Id_de_compra</th>
        <th>Id de cliente</th>
        <th>fecha_hora_compras</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($shoppinges as $shopping)
        <tr>
            <td>{{ $shopping->id}}</td>
            <td>{{ $shopping->customer_id}}</td>
            <td>{{ $shopping->date_time_shopping}}</td>           
            <td>
                <a class="waves-effect waves-light btn blue darken-1">Detalles</a>
                <a class="waves-effect waves-light btn orange darken-4">Editar</a>
                <a class="waves-effect waves-light btn deep-orange accent-4">Eliminar</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('.collapsible').collapsible();
    });
    $(document).ready(function(){
        $('select').formSelect();
    });
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });

 $(document).ready(function(){
    $('.tap-target').tapTarget();
  })

  $('.dropdown-trigger').dropdown();
</script>
</body>
</html>