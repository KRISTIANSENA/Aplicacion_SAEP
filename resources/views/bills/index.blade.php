@extends('layouts.app')
@section('content')

<h5>Listado de facturas <a href="{{ route('bills.create') }}" class="btn">Crear nueva factura</a></h5>

<table>
    <thead>
    <tr>
        <th>Id de factura</th>
        <th>Nombre del producto</th>
        <th>Cantidad</th>
        <th>Método de pago</th>

        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($bills as $bill)
        <tr>
            <td>{{ $bill->id}}</td>
            <td>{{ $bill->products->product_name}}</td>
            <td>{{ $bill->amount}}</td>

            <td>

            <form action="{{route('bills.destroy',$bill->id)}}" method="post" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                        </button>
                   </form>


                <a class="waves-effect waves-light btn blue darken-1">Detalles</a>


            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection