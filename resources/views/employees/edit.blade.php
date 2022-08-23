@extends('layouts.app')
@section('content')
    <h5>Editar Proveedor</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('providers.update',$provider->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-field col s12">
                        <input id="provider_name" type="text" name="provider_name" value="{{$provider->provider_name}}" class="validate" required>
                        <label for="name">Nombre del proveedor</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="nit" type="number" name="nit" value="{{$provider->nit}}"  class="validate" required>
                        <label for="name">Numero de NIT</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="business_type" type="text" name="business_type" value="{{$provider->business_type}}"  class="validate">
                        <label for="name">Tipo de negocio</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="telephone" type="number" name="telephone" value="{{$provider->telephone}}" class="validate" required>
                        <label for="name">Numero de Teléfono</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="address" type="text" name="address" value="{{$provider->address}}"  class="validate" required>
                        <label for="name">Dirección</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="place" type="text" name="place" value="{{$employees->place}}"  class="validate">
                        <label for="name">Localidad</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="metod_conveyance" type="text" name="metod_conveyance" value="{{$provider->metod_conveyance}}"  class="validate">
                        <label for="name">Método de transporte</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('providers.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
