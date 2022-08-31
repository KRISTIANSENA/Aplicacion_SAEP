@extends('layouts.app')
@section('content')
<body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>
<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                    <li class="breadcrumb-item active">Contacts</li>
                                </ol>
                            </div>
                            <h4 class="page-title"> Lista de empleados</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between mb-2">
                                    <div class="col-auto">
                                        <form>
                                            <div class="mb-2">
                                                <label for="inputPassword2" class="visually-hidden">Buscar</label>
                                                <input type="search" class="form-control" id="inputPassword2" placeholder="Buscar...">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end">
                                            <button  <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                            <a href="{{ route('providers.create') }}" class="btn"><i class="mdi mdi-plus-circle me-1"></i>Crear nuevo Proveedor</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>Id de Proveedor  </th>
                                                <th>Nombre del proveedor</th>
                                                <th>NIT</th>
                                                <th>Tipo de negocio</th>
                                                <th>Teléfono</th>
                                                <th>Dirección</th>
                                                <th>Localidad</th>
                                                <th>Método de transporte</th>
                                                <th>acciones </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($providers as $provider)
                                                <tr>
                                                    <td>{{$provider->id}}</td>
                                                    <td>{{$provider->provider_name}}</td>
                                                    <td>{{$provider->nit}}</td>
                                                    <td>{{$provider->business_type}}</td>
                                                    <td>{{$provider->telephone}}</td>
                                                    <td>{{$provider->address}}</td>
                                                    <td>{{$provider->place}}</td>
                                                    <td>{{$provider->metod_conveyance}}</td>
                                                    <td>
                                                        <form action="{{route('providers.destroy',$provider->id)}}" method="post" >
                                                            @csrf
                                                            <a href="{{route('providers.edit', $provider->id)}}">
                                                                <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>
                                                            <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                                                                @method('DELETE')
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
            </div>
        </div>
    </div>
</div>
<script src="styles/style/min/vendor.min.js"></script>
<script src="styles/style/min/app.min.js"></script>
</body>
@endsection('content')
