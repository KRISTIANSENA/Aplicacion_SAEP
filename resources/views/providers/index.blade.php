@extends('layouts.app')
@section('content')

<h5>Listado de Proveedores <a href="{{ route('providers.create') }}" class="btn">Crear nuevo Proveedor</a></h5>

<table>
    <thead>
    <tr>
        <th>Id de Proveedor  </th>
        <th>Nombre del proveedor</th>
        <th>NIT</th>
        <th>Tipo de negocio</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Localidad</th>
        <th>Método de transporte</th>
        <th>acciones </th>
    </tr>
    </thead>

    <tbody>
@foreach($providers as $provider)
    <tr>
        <td>{{$provider->id}}</td>
        <td>{{$provider->provider_name}}</td>
        <td>{{$provider->nit}}</td>
        <td>{{$provider->business_type}}</td>
        <td>{{$provider->telephone}}</td>
        <td>{{$provider->address}}</td>
        <td>{{$provider->place}}</td>
        <td>{{$provider->metod_conveyance}}</td>
        <td>
            <form action="{{route('providers.destroy',$provider->id)}}" method="post" >
                @csrf
                <a href="{{route('providers.edit', $provider->id)}}">
                    <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>
                @method('DELETE')
                <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                </button>
                 <a href="{{route('providers.show', $provider->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>




            </form>


            </form>


        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection
