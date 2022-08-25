@extends('layouts.app')
@section('content')


    <div class="container">
        <h5>DETALLES {{$employee->employee_name}} </h5>
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

            </tr>
            </thead>
            <tbody>
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
            </tr>
            </tbody>
        </table>
        <div class="container">
           <h5> <a href="{{ route('employees.index') }}" class="btn">volver</a></h5>
        </div>
    </div>

@endsection
