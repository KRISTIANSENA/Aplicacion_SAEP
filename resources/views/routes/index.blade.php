@extends('layouts.app')
@section('content')

<h5>Listado de rutas <a href="{{ route('routes.create') }}" class="btn">Crear nueva ruta</a></h5>

<table>
    <thead>
    <tr>
        <th>ID Ruta</th>
        <th>ID del orden de venta</th>
        <th>ID del empleado</th>
        <th>Zona asignada</th>
        <th>Cantidad de entregas</th>
        <th>Tiempo de servio </th>
        <th>Placa del vehiculo</th>
        <th>Vehiculo</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($routes as $route)
        <tr>
            <td>{{ $route->id}}</td>
            <td>{{ $route->id_output_product}}</td>
            <td>{{ $route->employee_id}}</td>
            <td>{{ $route->assigned_zone}}</td>
            <td>{{ $route->quantity_deliveries}}</td>
            <td>{{ $route->service_time}}</td>
            <td>{{ $route->vehicle_license_plate}}</td>
            <td>{{ $route->vehicle}}</td>
            <td>

                <form action="{{route('routes.destroy',$route->id)}}" method="post" >
                    @csrf
                    <a href="{{route('routes.edit', $route->id)}}">
                        <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>
                    @method('DELETE')
                    <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR

                    </button>
                    <a href="{{route('routes.show', $route->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>

                    </button>
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
