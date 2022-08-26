@extends('layouts.app')
@section('content')
    <h5>Crear nueva orden de venta</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('output_products.store') }}" method="post">
                    @csrf
                    <div class="input-field col s12">
                        <select name="id_sales_invoices" id="id_sales_invoices">
                            <option value=""disabled selected>Seleccionar nombre del empleado.</option>
                                @foreach($sales_invoices as $sale_invoice)  
                            <option value="{{ $sale_invoice->id}}">{{ $sale_invoice->id}}</option>
                                @endforeach
                        </select>
                        <label>Identificación de orden de venta</label>
                    </div>                    
                    <div class="input-field col s12">
                        <input id="amount" type="text" name="amount" class="validate" required>
                        <label for="name">Cantidad de producto salido</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="batch" type="text" name="batch" class="validate">
                        <label for="name">Lote de productos</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="departure_date" type="date" name="departure_date" class="validate">
                        <label for="name">Fecha de salida</label>
                    </div>
                    <button class="btn dark darken-1">Registrar nuevo Proveedor</button> |
                     <a  href="{{ route('output_products.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection