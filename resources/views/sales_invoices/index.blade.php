@extends('layouts.app')
@section('content')

    <h5>Listado de Productos <a href="{{ route('sales_invoices.create') }}" class="btn">Crear nuevo Producto</a></h5>

<table>
    <thead>
    <tr>
        <th>Numero de id  </th>
        <th>Id del empleado</th>
        <th>Id del cliente</th>
        <th>Id del producto</th>
        <th>Detalles</th>
        <th>Monto</th>
        <th>Valor unitario</th>
        <th>Subtotal</th>
        <th>Iva</th>
        <th>Stronghold</th>
        <th>Deduciones</th>
        <th>Total</th>
        <th>Soporte de ventas</th>


        <th>acciones </th>
    </tr>
    </thead>

    <tbody>
    @foreach($sales_invoices as $sale_invoice)
        <tr>
            <td>{{ $sale_invoice->id}}</td>
            <td>{{$sale_invoice->id_employee}}</td>
            <td>{{$sale_invoice->id_customer}}</td>
            <td>{{ $sale_invoice->id_product}}</td>
            <td>{{ $sale_invoice->detail}}</td>
            <td>{{ $sale_invoice->amount}}</td>
            <td>{{ $sale_invoice->unit_value}}</td>
            <td>{{ $sale_invoice->subtotal}}</td>
            <td>{{ $sale_invoice->iva}}</td>
            <td>{{ $sale_invoice->stronghold}}</td>
            <td>{{ $sale_invoice->deductions}}</td>
            <td>{{ $sale_invoice->total}}</td>
            <td>{{ $sale_invoice->sales_invoices_support}}</td>


            <td>
                <form action="{{route('sales_invoices.destroy',$sale_invoice->id)}}" method="post" >
                    @csrf
                    <a href="{{route('sales_invoices.edit', $sale_invoice->id)}}">
                        <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>
                    @method('DELETE')
                    <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                    </button>
                    <a href="{{route('sales_invoices.show', $sale_invoice->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>

                    </button>


                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
