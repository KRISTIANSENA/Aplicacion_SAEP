@extends('layouts.app')
@section('content')

<h5>Listado de ventas <a href="{{ route('output_products.create') }}" class="btn">Crear nuevo Venta</a></h5>

<table>
    <thead>
    <tr>
        <th>Id de salida de producto </th>
        <th>Identificación de orden de venta</th>
        <th>Cantidad de producto salido</th>
        <th>Lote de productos</th>
        <th>Fecha de salida</th>
        <th>Acciones </th>
    </tr>
    </thead>

    <tbody>
@foreach($output_products as $output_product)
    <tr>
        <td>{{$output_product->id}}</td>
        <td>{{$output_product->id_sales_invoices}}</td>
        <td>{{$output_product->amount}}</td>
        <td>{{$output_product->batch}}</td>
        <td>{{$output_product->departure_date}}</td>
        <td>
            <form action="{{route('output_products.destroy',$output_product->id)}}" method="post" >
                @csrf
                <a href="{{route('output_products.edit', $output_product->id)}}">
                    <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>

                <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                    @method('DELETE')
                </button>
                 <a href="{{route('output_products.show', $output_product->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>

</button>
            </form>


        </td>

    </tr>
    @endforeach
    </tbody>
    </table>
@endsection
