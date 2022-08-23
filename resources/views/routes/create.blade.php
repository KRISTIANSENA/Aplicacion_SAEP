@extends('layouts.app')
@section('content')
    <h5>Crear nuevo ruta </h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('routes.store') }}" method="post">
                    @csrf
                    <div class="input-field col s12">
                        <input id="name" type="text" name="name" class="validate" required>
                        <label for="name">Nombre del producto</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="description" name="description" class="materialize-textarea"></textarea>
                        <label for="description">Descripcion del producto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="price" type="number" name="price" class="validate" required>
                        <label for="price">Precio del producto</label>
                    </div>

                    <div class="input-field col s12">
                        <select name="provider_id" id="provider_id">
                            <option value="" disabled selected>Seleccionar...</option>
                            @foreach($routes as $route)
                                <option value="{{ $route->id }}">{{  $route->name }}</option>
                            @endforeach

                        </select>
                        <label>Proveedor</label>
                    </div>
                    <button class="btn pink darken-1">Registrar nuevo producto</button> | <a  href="{{ route('routes.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
