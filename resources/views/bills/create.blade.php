@extends('layouts.app')
@section('content')
    <h5>Crear nueva Factura</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('bills.store') }}" method="post">
                    @csrf
                    <div class="input-field col s12">
                    <select>
                        <option value=""disabled selected>Seleccionar nombre de producto.</option>
                          @foreach($products as $product)      
                                <option value="1">{{ $product->id}}</option>
                            @endforeach
                        </select>
                        <label>producto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="amount_bill" type="number" name="amount" class="validate" required>
                        <label for="name">Numero de productos</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="payment_method_bill" type="text" name="payment_method" class="validate" required>
                        <label for="name">Metodo de Pago</label>
                    </div>
                    
                    <button class="btn pink darken-1">Registrar nuevo producto</button> | <a  href="{{ route('bills.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
