@extends('layouts.app')
@section('content')
    <div class="container">
        <h5>DETALLES {{$output_product->id}} </h5>
        <table>
            <thead>
                <tr>
                    <th>Id de salida de producto </th>
                    <td>{{$output_product->id}}</td>
                </tr>
                <tr>
                    <th>Identificación de orden de venta</th>
                    <td>{{$output_product->id_sales_invoices}}</td>
                </tr>
                <tr>
                    <th>Cantidad de producto salido</th>
                    <td>{{$output_product->amount}}</td>
                </tr>
                <tr>
                    <th>Lote de productos</th>  
                    <td>{{$output_product->batch}}</td>
                </tr>
                <tr>
                    <th>Fecha de salida</th>
                    <td>{{$output_product->departure_date}}</td>
                </tr>
            </tbody>
        </table>
        <div class="container">
            <a href="{{ route('output_products.index') }}" class="btn">volver</a></h5>
        </div>
    </div>
@endsection        