@extends('layouts.app')
@section('content')


    <div class="container">
        <h5>Detalle ordenes de compra de {{$purchase_order->id}} </h5>
        <table>
            <thead>

        <tr><th>Numero de id  </th><td>{{ $purchase_order->id}}</td></tr>
        <tr><th>Identificación de empleado</th> <td>{{$purchase_order->employees->employee_name}}</td></tr>
        <tr><th>Identificación de proveedor</th> <td>{{ $purchase_order->providers->provider_name}}</td></tr>
        <tr><th>Identificación del producto</th><td>{{ $purchase_order->products->product_name}}</td></tr>
        <tr><th>Detalle</th><td>{{ $purchase_order->detail}}</td></tr>
        <tr><th>Monto</th><td>{{ $purchase_order->amount}}</td></tr>
        <tr><th>Valor unitario</th><td>{{ $purchase_order->unit_value}}</td></tr>
        <tr><th>total parcial</th><td>{{ $purchase_order->subtotal}}</td></tr>
        <tr><th>iva</th><td>{{ $purchase_order->iva}}</td></tr>
        <tr><th>Retefuente</th><td>{{ $purchase_order->stronghold}}</td></tr>
        <tr><th>deducciones</th><td>{{ $purchase_order->deductions}}</td></tr>
        <tr><th>total</th><td>{{ $purchase_order->total}}</td></tr>
        <tr><th>compra_factura_apoyo</th><td>{{ $purchase_order->ipurchase_invoice_supportd}}</td></tr>
        </table>
        <div class="container">
            <a href="{{ route('purchase_orders.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection

    


