@extends('layouts.app')
@section('content')

    <!-- ============================================================== -->
    <!-- inicio contenido -->
    <!-- ============================================================== -->


        <h5>Crear nuevo producto </h5>
        <hr>

        <div class="card ">
            <div class="card-body">
                    <form action="{{ route('products.store') }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nombre del producto:</label>
                            <div class="col-sm-10">
                            <input class="col-9"id="product_name" type="text" name="product_name"  class="validate" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Marca:</label>
                            <div class="col-sm-10">
                            <input class="col-9" id="brand" type="text" name="brand"   class="validate" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Modelo:</label>
                            <div class="col-sm-10">
                            <input class="col-9" id="model" type="text" name="model"  class="validate">
                            </div>
                        </div>
                        <button type="sutmid" class="btn btn-success">Terminar</button> <a  href="{{ route('products.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- fin contenido-->
    <!-- ============================================================== -->
@endsection


