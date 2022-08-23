@extends('layouts.app')
@section('content')


    <div class="container">
        <h5>DETALLES {{$route->vehicle_license_plate}} </h5>
        <table>
            <thead>
            <tr>
                <th> ID Ruta</th>
                <th>ID del empleado</th>
                <th>Zona asignada</th>
                <th>Cantidad de entregas</th>
                <th>Hora de entraga </th>
                <th>Placa del vehiculo</th>
                <th>ID de factura</th>
                <th>Id de entrega</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $route->id}}</td>
                <td>{{ $route->employee_id}}</td>
                <td>{{ $route->assigned_zone}}</td>
                <td>{{ $route->quantity_deliveries}}</td>
                <td>{{ $route->service_time}}</td>
                <td>{{ $route->vehicle_license_plate}}</td>
                <td>{{ $route->bill_id}}</td>
                <td>{{ $route->delivery_id}}</td>

            </tr>
            </tbody>
        </table>
        <div class="container">
            <a href="{{ route('routes.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection
