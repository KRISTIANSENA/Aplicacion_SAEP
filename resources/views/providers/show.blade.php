@extends('layouts.app')
@section('content')


    <div class="container">
        <h5>DETALLES {{$provider->provider_name}} </h5>
        <table>
            <thead>
            <tr>
                <th>Nombre del proveedor</th>
                <th>Nit</th>
                <th>Tipo de negocio</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Localidad</th>
                <th>Metodo de transporte</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$provider->provider_name}}</td>
                <td>{{$provider->nit}}</td>
                <td>{{$provider->business_type}}</td>
                <td>{{$provider->telephone}}</td>
                <td>{{$provider->address}}</td>
                <td>{{$provider->place}}</td>
                <td>{{$provider->metod_conveyance}}</td>

            </tr>
            </tbody>
        </table>
        <div class="container">
            <a href="{{ route('providers.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection
