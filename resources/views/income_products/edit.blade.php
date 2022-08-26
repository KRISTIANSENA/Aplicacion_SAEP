@extends('layouts.app')
@section('content')
    <h5>Editar ingreso</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('income_products.update',$income_product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-field col s12">
                        <select name="id_purchase_order" id="id_purchase_order">
                            @foreach($purchase_orders as $purchase_order)   
                            <option value="{{ $purchase_order->id}}">{{$purchase_order->detail}}</option>
                                @endforeach
                        </select>
                        <label>Identificacion de orden de venta</label>
                    </div>
                    <div class="input-field col s12">
                    <select name="id_product" id="id_product" value="{{$income_product->id_product}}">
                            @foreach($products as $product) 
                                <option value="{{ $product->id}}">{{ $product->product_name}}</option>
                            @endforeach
                        </select>
                        <label>Nombre del producto</label>
                    <div class="input-field col s12">
                        <input id="amount" type="number" name="amount" value="{{$income_product->amount}}"   class="validate" required>
                        <label for="name">Monto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="batch" type="text" name="batch" value="{{$income_product->batch}}"   class="validate" required>
                        <label for="name">Lote</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="date_of_admission" type="text" value="{{$income_product->date_of_admission}}" name="date_of_admission">
                        <label for="name">Fecha de ingreso</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('income_products.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection