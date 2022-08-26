@extends('layouts.app')
@section('content')
    <h5>Crear nuevo ingreso </h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('income_products.store') }}" method="post">
                    @csrf
                    <div class="input-field col s12">
                        <select name="id_purchase_order" id="id_purchase_order">
                            <option value=""disabled selected>Seleccionar orden de venta.</option>
                            @foreach($purchase_orders as $purchase_order)   
                            <option value="{{ $purchase_order->id}}">{{$purchase_order->id}}</option>
                                @endforeach
                        </select>
                        <label>Identificacion de orden de venta</label>
                    </div>
                    <div class="input-field col s12">
                    <select name="id_product" id="id_product">
                        <option value=""disabled selected>Seleccionar nombre del producto.</option>
                            @foreach($products as $product) 
                                <option value="{{ $product->id}}">{{ $product->product_name}}</option>
                            @endforeach
                        </select>
                        <label>Nombre del producto</label>
                    <div class="input-field col s12">
                        <input id="amount" type="number" name="amount"   class="validate" required>
                        <label for="name">Monto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="batch" type="text" name="batch"   class="validate" required>
                        <label for="name">Lote</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="date_of_admission" type="date" name="date_of_admission">
                        <label for="name">Fecha de ingreso</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('income_products.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
