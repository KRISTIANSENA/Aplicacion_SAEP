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
                    <div class="input-field col s12" >
                        <select name="id_output_product" id="id_output_product" value="$route->id_output_product">
                                @foreach($output_products as $output_product)  
                            <option value="{{ $output_product->id}}">{{ $output_product->id}}</option>
                                @endforeach
                        </select>
                        <label>ID de orden de venta</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="employee_id" id="employee_id" value="$route->employee_id">
                                @foreach($employees as $employee)   
                            <option value="{{ $employee->id}}">{{ $employee->employee_name}}</option>
                                @endforeach
                        </select>
                        <label>ID del empleado</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="assigned_zone" type="text" name="assigned_zone" value="{{$route->assigned_zone}}" class="validate" required>
                        <label for="name">Zona asignada</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="quantity_deliveries" type="number" name="quantity_deliveries" value="{{$route->quantity_deliveries}}" class="validate" required>
                        <label for="name">Cantidad de entregas</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="service_time" type="time" name="service_time" value="{{$route->service_time}}" class="validate" required>
                        <label for="name">Hora de entraga</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="vehicle_license_plate" type="text" name="vehicle_license_plate" value="{{$route->vehicle_license_plate}}" class="validate" required>
                        <label for="name">Placa del vehiculo</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="vehicle" type="text" name="vehicle" value="{{$route->vehicle}}" class="validate" required>
                        <label for="name">Vehiculo asignado</label>
                    </div>
                    <button class="btn dark darken-1">Actualizar</button> | <a  href="{{ route('routes.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection