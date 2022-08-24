@extends('layouts.app')
@section('content')
    <h5>Crear cliernte</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('customers.store') }}" method="post"
                    @csrf
                    <div class="input-field col s12">
                        <select name="user_id" id="user_id">
                            <option value="" disabled selected>Seleccionar...</option>
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{  $customer->name }}</option>
                            @endforeach
                        </select>
                    <div class="input-field col s12">
                        <input id="name" type="text" name="name" class="validate" required>
                        <label for="name">Nombre </label>
                    </div>
                    <div class="input-field col s12">
                        <input id="last_name" type="text" name="last_name" class="validate" required>
                        <label for="name">Apellido</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate">
                        <label for="name">Correo</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="identification_type" type="text" name="identification_type" class="validate" required>
                        <label for="name">Tipo de identificacion</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="identification_number" type="number" name="identification_number" class="validate" required>
                        <label for="name">Numero de identificacion</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="business_name" type="text" name="business_name" class="validate">
                        <label for="name">Nombre del negocio</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="telephone" type="number" name="telephone" class="validate" required>
                        <label for="name">Numero de Teléfono</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="address" type="text" name="address" class="validate" required>
                        <label for="name">Dirección</label>
                    </div>

                        <button class="btn dark darken-1">Registrar nuevo Proveedor</button> | <a  href="{{ route('customers.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
