@extends('layouts.app')
@section('content')

<h5>Listado de producto de ingresados <a href="{{ route('income_products.create') }}" class="btn">Crear nuevo Proveedor</a></h5>

<table>
    <thead>
    <tr>
        <th>Id de producto de ingresados</th>
        <th>Id de orden de compra</th>
        <th>id de producto ingresado</th>
        <th>Cantidad</th>
        <th>Lote</th>
        <th>Fecha de admicion</th>
        <th>acciones </th>
    </tr>
    </thead>

    <tbody>
@foreach($income_products as $income_product)
    <tr>
        <td>{{$income_product->id}}</td>
        <td>{{$income_product->id_purchase_order}}</td>
        <td>{{$income_product->id_product}}</td>
        <td>{{$income_product->amount}}</td>
        <td>{{$income_product->batch}}</td>
        <td>{{$income_product->date_of_admission}}</td>

        <td>
            <form action="{{route('income_products.destroy',$income_product->id)}}" method="post" >
                @csrf
                <a href="{{route('income_products.edit', $income_product->id)}}">
                    <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>

                <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                    @method('DELETE')
                </button>
                 <a href="{{route('income_products.show', $income_product->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>

</button>
            </form>


        </td>

    </tr>
    @endforeach
    </tbody>
    </table>
@endsection
