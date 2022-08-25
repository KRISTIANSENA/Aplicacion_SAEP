@extends('layouts.app')
@section('content')
        <h5>Editar cliente </h5>
        <hr>
        <div class="card horizontal">
            <div class="card-stacked">
                <div class="card-content">
                    <form action="{{ route('customers.update',$customer->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="input-field col s12">
                            <input id="name" type="text" name="name" value="{{$customer->name}}" class="validate" required>
                            <label for="name">Nombre </label>
                        </div>
                        <div class="input-field col s12">
                            <input id="last_name" type="text" name="last_name" value="{{$customer->last_name}}"  class="validate" required>
                            <label for="name">Apellido</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" value="{{$customer->email}}"  class="validate">
                            <label for="name">Correo</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="identification_type" type="text" name="identification_type" value="{{$customer->identification_type}}" class="validate" required>
                            <label for="name">Tipo de identificacion</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="identification_number" type="number" name="identification_number" value="{{$customer->identification_number}}"  class="validate" required>
                            <label for="name">Numero de identificacion</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="business_name" type="text" name="business_name" value="{{$customer->business_name}}"  class="validate">
                            <label for="name">Nombre del negocio</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="telephone" type="tel" name="telephone" value="{{$customer->telephone}}"  class="validate">
                            <label for="name">Telefono</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="address" type="text" name="address" value="{{$customer->address}}"  class="validate">
                            <label for="name">Direccion</label>
                        </div>
                        <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('providers.index') }}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    @endsection
