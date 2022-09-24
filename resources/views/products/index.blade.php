
    @extends('layouts.app')
    @section('content')
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
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
                                                <div class="me-4">
                                                    <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2" placeholder="Buscar...">
                                                </div>
                                                <label for="status-select" class="me-2">Buscar Por</label>
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
                                                <a class="btn text-primary float-right p-0 ml-3" href="{{ route('products.create') }}" title="Nuevo Producto"><i class="fa fa-plus fa-2x"></i></a>
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
                                                                    <a class="text-primary d-inline" title="editar" href="{{route('products.edit', $product->id)}}"><i class="fa fa-minus-circle"></i></a>

                                                                @method('DELETE')
                                                                    <a type="submit" class="text-danger d-inline eliminar" title="Eliminar" href="acciones.php?eliminar=1&id=3"><i class="fa fa-trash"></i></a>
                                                                    <a class="text-primary d-inline" title="detalle" href="{{route('products.show', $product->id)}}"><i class="fa fa-eye"></i></a>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- container -->

<<<<<<< Updated upstream
    @endsection


=======
    @endsection
>>>>>>> Stashed changes
