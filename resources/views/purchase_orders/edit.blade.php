@extends('layouts.app')
@section('content')
    <h5>Editar Producto Orden de Compra</h5>
    <hr>
    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{ route('purchase_orders.update',$purchase_order->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="input-field col s12">
                        <select name="id_employee" id="id_employee" value="{{$purchase_order->employees->employee_name}}">
                                @foreach($employees as $employee)   
                            <option value="{{ $employee->id}}">{{ $employee->employee_name}}</option>
                                @endforeach
                        </select>
                        <label>Identificación de empleado</label>
                    </div>
                    <div class="input-field col s12">
                    <select name="id_provider" id="id_provider" value="{{$purchase_order->providers->provider_name}}">
                                @foreach($providers as $provider)  
                                <option value="{{ $provider->id}}">{{ $provider->provider_name}}</option>
                                @endforeach
                        </select>
                        <label>Nombre del proveedor</label>
                    </div>
                    <div class="input-field col s12">
                    <select name="id_product" id="id_product" value="{{$purchase_order->products->product_name}}">
                            @foreach($products as $product) 
                                <option value="{{ $product->id}}">{{ $product->product_name}}</option>
                            @endforeach
                        </select>
                        <label>Nombre del producto</label>
                    </div>
                      <div class="input-field col s12">
                        <input id="detail" type="text" name="detail" value="{{$purchase_order->detail}}"   class="validate" required>
                        <label for="name">Detalle</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="amount" type="number" name="amount" value="{{$purchase_order->amount}}"  class="validate" required>
                        <label for="name">Monto</label>
                    </div><div class="input-field col s12">
                        <input id="unit_value" type="number" name="unit_value"  value="{{$purchase_order->unit_value}}" class="validate" required>
                        <label for="name">Valor unitario</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="subtotal" type="number" name="subtotal" value="{{$purchase_order->subtotal}}"   class="validate" required>
                        <label for="name">Total parcial</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="iva" type="number" name="iva" value="{{$purchase_order->iva}}"   class="validate" required>
                        <label for="name">IVA</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="stronghold" type="number" name="stronghold" value="{{$purchase_order->stronghold}}"  class="validate">
                        <label for="name">Retefuente</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="deductions" type="number" name="deductions" value="{{$purchase_order->deductions}}"  class="validate">
                        <label for="name">Deducciones</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="total" type="number" name="total" value="{{$purchase_order->total}}"  class="validate">
                        <label for="name">Total</label>
                    </div>

                    <div class="input-field col s12">
                        <input id="purchase_invoice_support" type="text" name="purchase_invoice_support" value="{{$purchase_order->purchase_invoice_support}}"  class="validate">
                        <label for="name">compra_factura_apoyo</label>
                    </div>
                    <button class="btn dark darken-1">Terminar</button> | <a  href="{{ route('purchase_orders.index') }}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection

