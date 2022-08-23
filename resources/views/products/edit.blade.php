@extends('layouts.app')
@section('content')
    <h5>Editar Productos</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('products.update',$product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-field col s12">
                        <input id="product_name" type="text" name="product_name" value="{{$product->product_name}}" class="validate" required>
                        <label for="name">Nombre del proveedor</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="brand" type="text" name="brand" value="{{$product->brand}}"  class="validate" required>
                        <label for="name">Marca</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="model" type="text" name="model" value="{{$product->model}}"  class="validate">
                        <label for="name">Modelo</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="telephone" type="number" name="telephone" value="{{$product->state}}" class="validate" required>
                        <label for="name">Estado</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="design_color" type="text" name="design_color" value="{{$product->design_color}}"  class="validate" required>
                        <label for="name">Color</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="Current_Quantity" type="text" name="Current_Quantity" value="{{$product->Current_Quantity}}"  class="validate">
                        <label for="name">Cantidad</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="factory_date" type="date" name="factory_date" value="{{$product->factory_date}}"  class="validate">
                        <label for="name">Fecha de fabricacion</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="warranty" type="date" name="warranty" value="{{$product->warranty}}"  class="validate">
                        <label for="name">Garantia</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="metod_conveyance" type="number" name="metod_conveyance" value="{{ $product->worth}}"  class="validate">
                        <label for="name">Price</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('products.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
