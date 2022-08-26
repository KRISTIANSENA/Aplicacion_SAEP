@extends('layouts.app')
@section('content')
    <h5>Editar producto de inventario</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('inventories.update',$inventory->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-field col s12">
                        <select name="id_income_products" id="id_income_products">
                            @foreach($income_products as $income_product)
                            <option value="{{ $income_product->id}}">{{$income_product->id}}</option>
                                @endforeach
                        </select>
                        <label>Identificacion de orden de ingreso</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="state" type="text" name="state" value="{{$inventory->state}}"   class="validate" required>
                        <label for="name">Estado del producto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="design_color" type="text" name="design_color" value="{{$inventory->design_color}}"   class="validate" required>
                        <label for="name">Color de diseño del producto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="Current_Quantity" type="number" name="Current_Quantity" value="{{$inventory->Current_Quantity}}"   class="validate" required>
                        <label for="name">Cantidad actual del producto</label>
                    </div>
                    
                    <div class="input-field col s12">
                        <input id="factory_date" type="date" name="factory_date" value="{{$inventory->factory_date}}"   class="validate" required>
                        <label for="name">Fecha de fabrica del producto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="warranty" type="date" name="warranty" value="{{$inventory->warranty}}" >
                        <label for="name">Garantía del producto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="worth" type="number" name="worth" value="{{$inventory->worth}}"   class="validate" required>
                        <label for="name">Valor del producto</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('inventories.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection