@extends('layouts.app')
@section('content')
    <h5>Crear nueva Orden de Compra </h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('purchase_orders.store') }}" method="post">
                    @csrf
                    <div class="input-field col s12">
                        <select name="id_employee" id="id_employee">
                            <option value=""disabled selected>Seleccionar nombre del empleado.</option>
                                @foreach($employees as $employee)   
                            <option value="{{ $employee->id}}">{{ $employee->employee_name}}</option>
                                @endforeach
                        </select>
                        <label>Identificación de empleado</label>
                    </div>
                    <div class="input-field col s12">
                    <select name="id_provider" id="id_provider">
                        <option value=""disabled selected>Seleccionar nombre del proveedor.</option>
                                @foreach($providers as $provider)  
                                <option value="{{ $provider->id}}">{{ $provider->provider_name}}</option>
                                @endforeach
                        </select>
                        <label>Nombre del proveedor</label>
                    </div>
                    <select name="id_product" id="id_product">
                        <option value=""disabled selected>Seleccionar nombre del producto.</option>
                            @foreach($products as $product) 
                                <option value="{{ $product->id}}">{{ $product->product_name}}</option>
                            @endforeach
                        </select>
                        <label>Nombre del producto</label>
                    </div>
                      <div class="input-field col s12">
                        <input id="detail" type="text" name="detail"   class="validate" required>
                        <label for="name">Detalle</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="amount" type="number" name="amount"   class="validate" required>
                        <label for="name">Monto</label>
                    </div><div class="input-field col s12">
                        <input id="unit_value" type="number" name="unit_value"   class="validate" required>
                        <label for="name">Valor unitario</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="subtotal" type="number" name="subtotal"   class="validate" required>
                        <label for="name">Total parcial</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="iva" type="number" name="iva"   class="validate" required>
                        <label for="name">IVA</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="stronghold" type="number" name="stronghold"  class="validate">
                        <label for="name">Retefuente</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="deductions" type="number" name="deductions"  class="validate">
                        <label for="name">Deducciones</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="total" type="number" name="total"  class="validate">
                        <label for="name">Total</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="purchase_invoice_support" type="text" name="purchase_invoice_support"  class="validate">
                        <label for="name">compra_factura_apoyo</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('purchase_orders.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
