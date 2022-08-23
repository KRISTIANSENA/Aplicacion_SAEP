@extends('layouts.app')
@section('content')
    <h5>Editar Producto</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('products.update',$product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-field col s12">
                        <input id="product_name" type="text" name="product_name" value="{{$product->product_name}}" class="validate" required>
                        <label for="name">Nombre del producto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="brand" type="text" name="brand" value="{{$product->brand}}"  class="validate" required>
                        <label for="name">Marca</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="model" type="text" name="model" value="{{$product->model}}"  class="validate">
                        <label for="name">Modelo</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('products.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
