@extends('layouts.app')
@section('content')
    <h5>Editar ruta</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('routes.update',$route->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="input-field col s12">
                        <input id="nit" type="number" name="assigned_zone" value="{{$route->assigned_zone}}"  class="validate" required>
                        <label for="name">Zona asignada</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="service_time" type="text" name="service_time" value="{{$route->service_time}}"  class="validate">
                        <label for="name">hora de servicio</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="vehicle_license_plate" type="text" name="vehicle_license_plate" value="{{$route->vehicle_license_plate}}" class="validate" required>
                        <label for="name">Placa del vehiculo </label>
                    </div>
                    <div class="input-field col s12">
                        <input id="bill_id" type="number" name="number" value="{{$route->bill_id}}"  class="validate" required>
                        <label for="name">Id del negocio</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="metod_conveyance" type="text" name="metod_conveyance" value="{{$route->delivery_id}}"  class="validate">
                        <label for="name">ID dela entrega </label>
                    </div>
                    <button class="btn dark darken-1">Actualizar</button> | <a  href="{{ route('routes.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
