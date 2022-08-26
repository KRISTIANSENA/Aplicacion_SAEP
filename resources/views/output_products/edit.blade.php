@extends('layouts.app')
@section('content')
    <h5>Editar Proveedor</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('output_products.update',$output_product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-field col s12">
                        <select name="id_sales_invoices" id="id_sales_invoices" value="{{$output_product->id_sales_invoices}}">
                                @foreach($sales_invoices as $sale_invoice)  
                            <option value="{{ $sale_invoice->id}}">{{ $sale_invoice->id}}</option>
                                @endforeach
                        </select>
                        <label>Identificación de orden de venta</label>
                    </div>                    
                    <div class="input-field col s12">
                        <input id="amount" type="text" name="amount" value="{{$output_product->amount}}" class="validate" required>
                        <label for="name">Cantidad de producto salido</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="batch" type="text" name="batch"  value="{{$output_product->batch}}" class="validate">
                        <label for="name">Lote de productos</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="departure_date" type="date" name="departure_date" value="{{$output_product->departure_date}}" class="validate">
                        <label for="name">Fecha de salida</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('providers.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection     