@extends('layouts.app')
@section('content')

    <h5>Listado de Productos <a href="{{ route('products.create') }}" class="btn">Crear nuevo Producto</a></h5>

<table>
    <thead>
    <tr>
        <th>Numero de id  </th>
        <th>Nombre del producto</th>
        <th>Marca</th>
        <th>Modelo</th>
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