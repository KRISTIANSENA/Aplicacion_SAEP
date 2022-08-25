@extends('layouts.app')
@section('content')
    <h5>Editar cliente </h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('deliveries.update',$delivery->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-field col s12">
                        <input id="estate" type="text" name="estate" value="{{ $delivery->estate}}" class="validate" required>
                        <label for="name">Estado </label>
                    </div>
                    <div class="input-field col s12">
                        <input id="date_time_delivery" type="date" name="date_time_delivery" value="{{$delivery->date_time_delivery}}"  class="validate" required>
                        <label for="name">Fecha de entrega</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="observation" type="text" name="observation" value="{{$delivery->observation}}"  class="validate">
                        <label for="name">Observacion</label>
                    </div>


                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('deliveries.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
