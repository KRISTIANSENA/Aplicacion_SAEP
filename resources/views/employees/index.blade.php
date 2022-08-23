@extends('layouts.app')
@section('content')


    <h5>Listado de Productos <a href="{{ route('employees.create') }}" class="btn">Crear nuevo Producto</a></h5>

<table>
    <thead>
    <tr>
        <th> empleado Id  </th>
        <th>id del usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipo de identificacion</th>
        <th>numero de identificacion</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Cargo</th>
        <th>fecha de nacimiento</th>
        <th>Numero celular</th>
        <th>acciones </th>
    </tr>
    </thead>

    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id}}</td>
            <td>{{$employee->user_id}}</td>
            <td>{{$employee->employee_name}}</td>
            <td>{{ $employee->employee_last_name}}</td>
            <td>{{ $employee->identification_type}}</td>
            <td>{{ $employee->identification_number}}</td>
            <td>{{ $employee->email}}</td>
            <td>{{ $employee->address}}</td>
            <td>{{ $employee->charge}}</td>
            <td>{{ $employee->date_of_birth}}</td>
            <td>{{ $employee->phone_number}}</td>
            <td>
                <form action="{{route('employees.destroy',$employee->id)}}" method="post" >
                    @csrf
                    <a href="{{route('employees.edit', $employee->id)}}">
                        <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>
                    @method('DELETE')
                    <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR

                    </button>
                    <a href="{{route('employees.show', $employee->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>

                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>
