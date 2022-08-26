@extends('layouts.app')
@section('content')
    <h5>Crear nuevo producto de inventario </h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('inventories.store') }}" method="post">
                    @csrf
                    <div class="input-field col s12">
                        <select name="id_income_products" id="id_income_products">
                            <option value=""disabled selected>Seleccionar nombre de producto.</option>
                            @foreach($income_products as $income_product)
                                <option value="{{ $income_product->id}}">{{ $income_product->id}}</option>
                            @endforeach
                        </select>
                        <label>Identificación de ingreso de producto</label>
                    </div>
            <div class="input-field col s12">
                <input id="state" type="text" name="state"   class="validate" required>
                <label for="name">Estado</label>
            </div>
            <div class="input-field col s12">
                <input id="design_color" type="text" name="design_color"   class="validate" required>
                <label for="name">Color de diseño del producto</label>
            </div><div class="input-field col s12">
                <input id="Current_Quantity" type="number" name="Current_Quantity"   class="validate" required>
                <label for="name">Cantidad actual del producto</label>
            </div>
            <div class="input-field col s12">
                <input id="factory_date" type="date" name="factory_date"   class="validate" >
                <label for="name">Fecha de fabrica del producto</label>
            </div>
            <div class="input-field col s12">
                <input id="warranty" type="date" name="warranty"   class="validate" required>
                <label for="name">Garantía del producto</label>
            </div>
            <div class="input-field col s12">
                <input id="worth" type="number" name="worth"  class="validate">
                <label for="name">Valor del producto</label>
            </div>
            <button class="btn dark darken-1">Terminar</button> |<a href="{{ route('inventories.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
    </div>
@endsection
