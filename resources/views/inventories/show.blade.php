@extends('layouts.app')
@section('content')

    <div class="container">    
        <h5>Detalle producto de inventario {{$inventory->id}} </h5>
        <table>
            <thead>
                <tr>
                    <th>Id de inventario</th>
                    <td>{{$inventory->id}}</td>
                </tr>
                <tr>
                    <th>Identificación de orden de venta</th>
                    <td>{{$inventory->id_income_products}}</td>
                </tr>
                <tr>
                    <th>Estado del producto</th>
                    <td>{{$inventory->state}}</td>
                </tr>
                <tr>
                    <th>Color de diseño del producto</th>
                    <td>{{$inventory->design_color}}</td>
                </tr>
                <tr>
                    <th>Cantidad actual del producto</th>
                    <td>{{$inventory->Current_Quantity}}</td>
                </tr>
                <tr>
                    <th>Fecha de fabrica del producto</th>
                    <td>{{$inventory->factory_date}}</td>
                </tr>
                <tr>
                    <th>Garantía del producto</th>
                    <td>{{$inventory->warranty}}</td>
                </tr>
                <tr>
                    <th>Valor del producto</th> 
                    <td>{{$inventory->worth}}</td>
                </tr>
        </table>
        <div class="container">
            <a href="{{ route('inventories.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection

