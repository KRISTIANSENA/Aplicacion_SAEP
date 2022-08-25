@extends('layouts.app')
@section('content')


    <div class="container">
        <h5>DETALLES {{$sale_invoice->sale_invoice}} </h5>
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
                <th>Soporte de venta</th>

            </tr>
            </thead>
            <tbody>
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
            </tr>
            </tbody>
        </table>
        <div class="container">
            <a href="{{ route('sales_invoices.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection
