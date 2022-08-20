@extends('layouts.app')
@section('content')

    
<h5>Listado de Entregas <a href="{{ route('deliveries.create') }}" class="btn">Crear nueva Entrega</a></h5>

<table>
    <thead>
    <tr>
        <th>Id de Entrega</th>
        <th>Id de Ruta Asignada</th>
        <th>Estado</th>
        <th>Fecha y hora de entrega</th>
        <th>Observación</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($deliveries as $delivery)
        <tr>
            <td>{{ $delivery->id}}</td>
            <td>{{ $delivery->id_route}}</td>
            <td>{{ $delivery->estate}}</td>
            <td>{{ $delivery->date_time_delivery}}</td>
            <td>{{ $delivery->observation}}</td>
            <td>
            <form action="{{route('deliveries.destroy',$delivery->id)}}" method="post" >
                        @csrf
                        <a href="{{route('deliveries.edit', $delivery->id)}}">
                        <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>
                        @method('DELETE')
                        <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                        </button>
                        <a class="waves-effect waves-light btn blue darken-1">Detalles</a>

                        
                   </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection