@extends('layouts.app')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Rutas</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <form class="d-flex flex-wrap align-items-center">
                                            <label for="inputPassword2" class="visually-hidden">Buscar</label>
                                            <div class="me-4">
                                                <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2" placeholder="Buscar...">
                                            </div>
                                            <label for="status-select" class="me-2">Buscar Por</label>
                                            <div class="me-sm-3">
                                                <select class="form-select my-1 my-lg-0" id="status-select">
                                                    <option selected="">Todo</option>
                                                    <option value="1">mas frecuentes</option>
                                                    <option value="2">Ultima semana</option>
                                                    <option value="3">Ultimo mes</option>
                                                    <option value="4">Ultimo dia</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-lg-end my-1 my-lg-0">
                                            <a class="btn text-primary float-right p-0 ml-3" href="{{ route('products.create') }}" title="Nueva ruta"><i class="fa fa-plus fa-2x"></i></a>
                                        </div>
                                    </div><!-- end col-->
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->
                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>ID Ruta</th>
                                                    <th>ID del orden de venta</th>
                                                    <th>ID del empleado</th>
                                                    <th>Zona asignada</th>
                                                    <th>Cantidad de entregas</th>
                                                    <th>Tiempo de servio </th>
                                                    <th>Placa del vehiculo</th>
                                                    <th>Vehiculo</th>
                                                    <th>Acciones</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($routes as $route)
                                                    <tr>
                                                        <td>{{ $route->id}}</td>
                                                        <td>{{ $route->id_output_product}}</td>
                                                        <td>{{ $route->employee_id}}</td>
                                                        <td>{{ $route->assigned_zone}}</td>
                                                        <td>{{ $route->quantity_deliveries}}</td>
                                                        <td>{{ $route->service_time}}</td>
                                                        <td>{{ $route->vehicle_license_plate}}</td>
                                                        <td>{{ $route->vehicle}}</td>
                                                        <td>

                                                            <form action="{{route('routes.destroy',$route->id)}}" method="post" >
                                                                @csrf
                                                                <a class="text-primary d-inline" title="editar" href="{{route('products.edit', $route->id)}}"><i class="fa fa-minus-circle"></i></a>
                                                                @method('DELETE')
                                                                <a type="submit" class="text-danger d-inline eliminar" title="Eliminar" href="acciones.php?eliminar=1&id=3"><i class="fa fa-trash"></i></a>
                                                                <a class="text-primary d-inline" title="detalle" href="{{route('products.show', $route->id)}}"><i class="fa fa-eye"></i></a>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
@endsection
