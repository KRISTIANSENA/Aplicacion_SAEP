@extends('layouts.app')
@section()
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Almacen</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Productos</h4>
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
                                            <div class="me-3">
                                                <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2" placeholder="Buscar...">
                                            </div>
                                            <label for="status-select" class="me-2">Sort By</label>
                                            <div class="me-sm-3">
                                                <select class="form-select my-1 my-lg-0" id="status-select">
                                                    <option selected="">Todo</option>
                                                    <option value="1">Popular</option>
                                                    <option value="2">Precio mas bajo</option>
                                                    <option value="3">Preciomasalto</option>
                                                    <option value="4">mas vendido</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-lg-end my-1 my-lg-0">
                                            <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                            <a href="{{ route('products.create') }}" class="btn"><i class="mdi mdi-plus-circle me-1"></i>Crear nuevo Producto</a>
                                        </div>
                                    </div><!-- end col-->
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card -->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->
                <div>

                    <div class="text-right ">

                        <table>
                            <thead>
                            <tr>
                                <th>Numero de id  </th>
                                <th>Nombre del producto</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>acciones </th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->brand}}</td>
                                    <td>{{ $product->model}}</td>
                                    <td>
                                        <form action="{{route('products.destroy',$product->id)}}" method="post" >
                                            @csrf
                                            <a href="{{route('products.edit', $product->id)}}">
                                                <button  class="waves-effect waves-light btn orange darken-4" >EDITAR</a>
                                            @method('DELETE')
                                            <button type="submit" class="waves-effect waves-light btn deep-orange accent-4" >ELIMINAR
                                            </button>
                                            <a href="{{route('products.show', $product->id)}}" class="waves-effect waves-light btn blue darken-1">Detalles</a>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- container -->
        </div> <!-- content -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; SAEP Grup <a href="">Practipasta</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">Acerca de</a>
                            <a href="javascript:void(0);">Ayuda</a>
                            <a href="javascript:void(0);">Contactenos</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @endsection

