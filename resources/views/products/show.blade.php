@extends('layouts.app')
@section('content')


    <div class="container">
        <h5>DETALLES {{$product->product_name}} </h5>
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

            </tr>
            </thead>
            <tbody>
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
            </tr>
            </tbody>
        </table>
        <div class="container">
            <a href="{{ route('products.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection
