@extends('layouts.app')
@section('content')


    <div class="container">
        <h5>DETALLES {{$product->product_name}} </h5>
        <table>
            <thead>
            <tr>
                <th>Numero de id </th>
                <th>Nombre del producto</th>
                <th>Marca</th>
                <th>Modelo</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $product->id}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->brand}}</td>
                <td>{{ $product->model}}</td>
            </tr>
            </tbody>
        </table>
        <div class="container">
            <a href="{{ route('products.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection
