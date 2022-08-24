@extends('layouts.app')
@section('content')


    <div class="container">
        <h5>DETALLES {{$customer->name}} </h5>
        <table>
            <thead>
            <tr>
                <th> id del cliente </th>
                <th>id del usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Tipo de identificacion</th>
                <th>Numero de identificacion</th>
                <th>Nombre del negocio</th>
                <th>Telefono </th>
                <th> Direccion</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->user_id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->last_name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->identification_type}}</td>
                <td>{{$customer->identification_number}}</td>
                <td>{{$customer->business_name}}</td>
                <td>{{$customer->telephone}}</td>
                <td>{{$customer->address}}</td>

            </tr>
            </tbody>
        </table>
        <div class="container">
            <a href="{{ route('customers.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection
