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
        <th>Nombre del producto</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Estado</th>
        <th>Color</th>
        <th>Cantidad Actual</th>
        <th>Fecha de fabricación</th>
        <th>Garantia </th>
        <th>Precio</th>
        <th>acciones </th>
    </tr>
    </thead>

    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->brand}}</td>
            <td>{{ $product->model}}</td>
            <td>{{ $product->state}}</td>
            <td>{{ $product->design_color}}</td>
            <td>{{ $product->Current_Quantity}}</td>
            <td>{{ $product->factory_date}}</td>
            <td>{{ $product->warranty}}</td>
            <td>{{ $product->worth}}</td>
            <td>
                <form action="{{route('products.destroy',$product->id)}}" method="post" >
                    @csrf
                    <a href="{{route('products.edit', $product->id)}}">
                        <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>
                    @method('DELETE')
                    <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                    </button>
                    <a href="{{route('products.show', $product->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>

                    </button>


                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>
