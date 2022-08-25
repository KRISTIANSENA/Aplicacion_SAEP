@extends('layouts.app')
@section('content')
    <h5>Editar Producto</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('sales_invoices.update',$product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-field col s12">
                        <input id="detail" type="text" name="detail" value="{{$sale_invoice->detail}}" class="validate" required>
                        <label for="name">Detalles</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="amount" type="number" name="amount" value="{{$sale_invoice->amount}}" class="validate" required>
                        <label for="name">Monto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="unit_value" type="number" name="unit_value" value="{{$sale_invoice->unit_value}}" class="validate" required>
                        <label for="name">Valor Unitario</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="subtotal" type="number" name="subtotal" value="{{$sale_invoice->subtotal}}" class="validate" required>
                        <label for="name">Subtotal</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="iva" type="text" name="iva" value="{{$sale_invoice->iva}}" class="validate" required>
                        <label for="name">Iva</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="stronghold" type="text" name="stronghold" value="{{ $sale_invoice->stronghold}}" class="validate" required>
                        <label for="name">stronghold</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="deductions" type="number" name="deductions" value="{{$sale_invoice->deductions}}"  class="validate" required>
                        <label for="name">Deduciones</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="total" type="text" name="total" value="{{$sale_invoice->total}}"  class="validate">
                        <label for="name">total</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="sales_invoices_support" type="text" name="sales_invoices_support" value="{{ $sale_invoice->sales_invoices_support}}"  class="validate">
                        <label for="name">Soporte de venta</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('sales_invoices.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
