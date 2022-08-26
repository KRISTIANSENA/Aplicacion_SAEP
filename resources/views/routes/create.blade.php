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
                        <select name="id_output_product" id="id_output_product">
                            <option value=""disabled selected>Seleccionar orden de venta.</option>
                                @foreach($output_products as $output_product)  
                            <option value="{{ $output_product->id}}">{{ $output_product->id}}</option>
                                @endforeach
                        </select>
                        <label>ID de orden de venta</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="employee_id" id="employee_id">
                            <option value=""disabled selected>Seleccionar nombre del empleado.</option>
                                @foreach($employees as $employee)   
                            <option value="{{ $employee->id}}">{{ $employee->employee_name}}</option>
                                @endforeach
                        </select>
                        <label>ID del empleado</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="assigned_zone" type="text" name="assigned_zone" class="validate" required>
                        <label for="name">Zona asignada</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="quantity_deliveries" type="number" name="quantity_deliveries" class="validate" required>
                        <label for="name">Cantidad de entregas</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="service_time" type="time" name="service_time" class="validate" required>
                        <label for="name">Hora de entraga</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="vehicle_license_plate" type="text" name="vehicle_license_plate" class="validate" required>
                        <label for="name">Placa del vehiculo</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="vehicle" type="text" name="vehicle" class="validate" required>
                        <label for="name">Vehiculo asignado</label>
                    </div>
                    <button class="btn pink darken-1">Registrar nuevo producto</button> | 
                    <a  href="{{ route('routes.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection