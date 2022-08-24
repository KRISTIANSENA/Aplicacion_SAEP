@extends('layouts.app')
@section('content')
    <h5>Editar empleado</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('employees.store') }}" method="post">
                    @csrf
                    <div class="input-field col s12">
                        <select name="user_id" id="user_id">
                            <option value="" disabled selected>Seleccionar...</option>
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}">{{  $employee->name }}</option>
                            @endforeach
                        </select>

                    <div class="input-field col s12">
                        <input id=employee_name" type="text" name="employee_name"   class="validate" required>
                        <label for="name">Nombre</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="employee_last_name" type="text" name="employee_last_name"   class="validate">
                        <label for="name">Apellido</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="identification_type" type="text" name="identification_type"  class="validate" required>
                        <label for="name">Tipo de identificacion</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="identification_number" type="number" name="identification_number"  class="validate" required>
                        <label for="name">Numero de identificacion</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate">
                        <label for="name">Correo</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="address" type="text" name="address"   class="validate">
                        <label for="name">Direccion</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="charge" type="text" name="charge"   class="validate">
                        <label for="name">Cargo</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="date_of_birth" type="date" name="date_of_birth"   class="validate">
                        <label for="name">Fecha de nacimiento</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="phone_number" type="number" name="phone_number"  class="validate">
                        <label for="name">Telefono</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('employees.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection

