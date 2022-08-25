@extends('layouts.app')
@section('content')


    <div class="container">
        <h5>DETALLES  </h5>
        <table>
            <thead>
            <tr>
                <th>Id de Entrega</th>
                <th>Id de Ruta Asignada</th>
                <th>Estado</th>
                <th>Fecha y hora de entrega</th>
                <th>Observación</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $delivery->id}}</td>
                <td>{{ $delivery->id_route}}</td>
                <td>{{ $delivery->estate}}</td>
                <td>{{ $delivery->date_time_delivery}}</td>
                <td>{{ $delivery->observation}}</td>

            </tr>
            </tbody>
        </table>
        <div class="container">
            <a href="{{ route('deliveries.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection
