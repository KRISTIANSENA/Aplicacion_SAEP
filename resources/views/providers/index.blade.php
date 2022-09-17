@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="h3 card-header">
                    <i class="fa fa-table"></i>  PRODUCTOS
                    <a class="btn text-primary float-right p-0 ml-3" href="nuevo.php" title="Nuevo Producto"><i class="fa fa-plus fa-2x"></i></a>
                    <a class="btn text-primary float-right p-0 ml-3" href="consultar.php" title="Consultar"><i class="fa fa-search fa-2x"></i></a></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Numero de id  </th>
                                <th>Nombre del producto</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Modelo</th>
                                <th>Modelo</th>
                                <th>Modelo</th>
                                <th>acciones </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($providers as $provider)
                                    <tr>

                                        <td>{{ $provider->provider_name}}</td>
                                        <td>{{$provider->nit}}</td>
                                        <td>{{$provider->business_type}}</td>
                                        <td>{{ $provider->telephone}}</td>
                                        <td>{{ $provider->address}}</td>
                                        <td>{{ $provider->place}}</td>
                                        <td>{{ $provider->metod_conveyance}}</td>
                                        <td>
                                            <form action="{{route('providers.destroy',$provider->id)}}" method="post" >
                                                @csrf
                                                <a href="{{route('providers.edit', $provider->id)}}">
                                                    <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>
                                                @method('DELETE')
                                                <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                                                </button>
                                                <a href="{{route('providers.show', $provider->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
            <a  class="btn btn-danger m-2" href="javascript: history.go(-1)">Volver atras</a>
        </div>
    </div>

@endsection('content')


