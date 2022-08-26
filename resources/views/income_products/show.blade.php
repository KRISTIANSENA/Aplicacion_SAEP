@extends('layouts.app')
@section('content')

    <div class="container">    
        <h5>Detalle ordenes de compra de {{$income_product->id}} </h5>
        <table>
            <thead>
            
        <tr>
            <th>Id de producto de ingresados</th>
            <td>{{$income_product->id}}</td>
        </tr>
        <tr>
            <th>Id de orden de compra</th> 
            <td>{{$income_product->id_purchase_order}}</td>
        </tr>
        <tr>
            <th>id de producto ingresado</th>
            <td>{{$income_product->id_product}}</td>
        </tr>
        <tr>
            <th>Cantidad</th>
            <td>{{$income_product->amount}}</td></tr>
        <tr>
            <th>Lote</th>
            <td>{{$income_product->batch}}</td>
        </tr>
        <tr>
            <th>Fecha de admicion</th>
            <td>{{$income_product->date_of_admission}}</td>
        </tr>

        </table>
        <div class="container">
            <a href="{{ route('income_products.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection

