@extends('layouts.app')
@section('content')


    <div class="container">
        <h5>DETALLES {{$route->id}} </h5>
        <table>
            <thead>
            <tr>
                <th>ID Ruta</th>
                <td>{{ $route->id}}</td>
            </tr>
            <tr>
                <th>ID del orden de venta</th>
                <td>{{ $route->id_output_product}}</td>
            </tr>
            <tr>
                <th>ID del empleado</th>
                <td>{{ $route->employee_id}}</td>
            </tr>
            <tr>
                <th>Zona asignada</th>
                <td>{{ $route->assigned_zone}}</td>
            </tr>
            <tr>
                <th>Cantidad de entregas</th>
                <td>{{ $route->quantity_deliveries}}</td>
            </tr>
            <tr>
                <th>Tiempo de servio </th>
                <td>{{ $route->service_time}}</td>
            </tr>
            <tr>
            <th>Placa del vehiculo </th>
            <td>{{ $route->vehicle_license_plate}}</td>
            </tr>
            <tr>
            <th>Vehiculo asignado </th>
            <td>{{ $route->vehicle}}</td>
            </tr>
            </tbody>
        </table>
        <div class="container">
            <a href="{{ route('routes.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection
