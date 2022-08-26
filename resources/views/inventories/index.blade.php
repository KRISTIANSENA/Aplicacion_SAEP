@extends('layouts.app')
@section('content')

<h5>Listado de producto de inventario <a href="{{ route('inventories.create') }}"
 class="btn">Crear nuevo producto de ineventario</a></h5>

<table>
    <thead>
    <tr>
        <th>Id de inventario</th>
        <th>Identificación de orden de venta</th>
        <th>Estado del producto</th>
        <th>Color de diseño del producto</th>
        <th>Cantidad actual del producto</th>
        <th>Fecha de fabrica del producto</th>
        <th>Garantía del producto</th>
        <th>Valor del producto</th>
        <th>Acciones </th>
    </tr>
    </thead>

    <tbody>
@foreach($inventories as $inventory)
    <tr>
        <td>{{$inventory->id}}</td>
        <td>{{$inventory->id_income_products}}</td>
        <td>{{$inventory->state}}</td>
        <td>{{$inventory->design_color}}</td>
        <td>{{$inventory->Current_Quantity}}</td>
        <td>{{$inventory->factory_date}}</td>
        <td>{{$inventory->warranty}}</td>
        <td>{{$inventory->worth}}</td>
        <td>
            <form action="{{route('inventories.destroy',$inventory->id)}}" method="post" >
                @csrf
                <a href="{{route('inventories.edit', $inventory->id)}}">
                    <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>

                <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                    @method('DELETE')
                </button>
                 <a href="{{route('inventories.show', $inventory->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection
