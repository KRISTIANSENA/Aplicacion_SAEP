@extends('layouts.app')
@section('content')
    <br>
<h5>Listado de clientes <a href="{{ route('customers.create') }}" class="btn">Crear nuevo Producto</a></h5>

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

        <th>acciones </th>
    </tr>
    </thead>



    <tbody>
    @foreach($customers as $customer)
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
            <td>
                <form action="{{route('customers.destroy',$customer->id)}}" method="post" >
                    @csrf
                    <a href="{{route('customers.edit', $customer->id)}}">
                     <button class="waves-effect waves-light btn orange darken-4" >EDITAR</a>

                    <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                        @method('DELETE')
                    </button>
                    <a href="{{route('customers.show', $customer->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>

                    </button>
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
