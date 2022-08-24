@extends('layouts.app')
@section('content')

    <h5>Listado de Ordenes de compra <a href="{{ route('purchase_orders.create') }}" class="btn">Crear nueva Ordenes de compra</a></h5>

<table>
    <thead>
    <tr>
        <th>Numero de id  </th>
        <th>Identificación de empleado</th>
        <th>Identificación de proveedor</th>
        <th>Identificación del producto</th>
        <th>Detalle</th>
        <th>Monto</th>
        <th>Valor unitario</th>
        <th>total parcial</th>
        <th>iva</th>
        <th>Retefuente</th>
        <th>deducciones</th>
        <th>total</th>
        <th>compra_factura_apoyo</th>
        <th>acciones </th>
    </tr>
    </thead>

    <tbody>
    @foreach($purchase_orders as $purchase_order)
        <tr>
        <td>{{ $purchase_order->id}}</td>
        <td>{{ $purchase_order->employees->employee_name}}</td>
        <td>{{ $purchase_order->providers->provider_name}}</td>
        <td>{{ $purchase_order->products->product_name}}</td>
        <td>{{ $purchase_order->detail}}</td>
        <td>{{ $purchase_order->amount}}</td>
        <td>{{ $purchase_order->unit_value}}</td>
        <td>{{ $purchase_order->subtotal}}</td>
        <td>{{ $purchase_order->iva}}</td>
        <td>{{ $purchase_order->stronghold}}</td>
        <td>{{ $purchase_order->deductions}}</td>
        <td>{{ $purchase_order->total}}</td>
        <td>{{ $purchase_order->ipurchase_invoice_supportd}}</td>
        <td>
                <form action="{{route('purchase_orders.destroy',$purchase_order->id)}}" method="post" >
                    @csrf
                    <a href="{{route('purchase_orders.edit', $purchase_order->id)}}">
                        <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>
                    @method('DELETE')
                    <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                    </button>
                    <a href="{{route('purchase_orders.show', $purchase_order->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

