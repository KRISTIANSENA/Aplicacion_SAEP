@extends('layouts.app')
@section('content')

    <!-- ============================================================== -->
    <!-- inicio contenido -->
    <!-- ============================================================== -->

        <h5>Crear nuevo producto </h5>
        <hr>
        <div class="card horizontal">
            <div class="card-stacked">
                <div class="card-content">
                    <form action="{{ route('products.store') }}" method="post">
                        @csrf
                        <div class="input-field col s12">
                            <input id="product_name" type="text" name="product_name"  class="validate" required>
                            <label for="name">Nombre del producto</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="brand" type="text" name="brand"   class="validate" required>
                            <label for="name">Marca</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="model" type="text" name="model"  class="validate">
                            <label for="name">Lote</label>
                        </div>
                        <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('products.index') }}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- fin contenido-->
    <!-- ============================================================== -->
@endsection


