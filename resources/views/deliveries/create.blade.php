@extends('layouts.app')
@section('content')
    <h5>Crear Entrega</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('deliveries.store') }}" method="post">
                    @csrf

                    <div class="input-field col s12">
                    <select id='id_route' name='id_route'>
                        <option value="1"disabled selected>Seleccionar id de Ruta Asignada</option>
                             @foreach($routes as $route)
                                <option value="{{$route->id_route}}">{{$route->id_route}}</option>
                            @endforeach
                        </select>
                        <label>Id de Ruta Asignada</label>
                    </div>


                    <div class="input-field col s12">
                        <input id="estate" type="text" name="estate" class="validate" required>
                        <label for="name">Estado de la entrega</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="date_time_delivery" type="date" name="date_time_delivery" class="validate">
                        <label for="name">Fecha y hora de entrega</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="observation" type="text" name="observation" class="validate" required>
                        <label for="name">Observación</label>
                    </div>


                    <button class="btn dark darken-1">Terminar Entrega</button>
                     <a  href="{{ route('deliveries.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
