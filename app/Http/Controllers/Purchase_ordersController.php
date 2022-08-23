<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase_order;
use App\Models\Employee;
use App\Models\Provider;
use App\Models\Product;

class Purchase_ordersController extends Controller
{
   //GET
   public function index()
   {
       $purchase_orders = purchase_order::all();
       return view('purchase_orders.index', compact('purchase_orders'));
   }
 
   // GET
   public function create()
   {
       $employees = employee::all();
       $providers = provider::all();
       $products = product::all();
       return view('purchase_orders.create', compact('employees','providers','products'));
   }
 
   //GET
   public function show($id)
   {
       $purchase_order = purchase_order::find($id);
       return view('purchase_orders.show', compact('purchase_order'));
   }
 
   // POST
   public function store(Request $request)
   {
       $purchase_order = purchase_order::create([
        
                            'id_employee'=> $request->id_employee,
                            'id_provider'=> $request->id_provider,
                            'id_product'=> $request->id_product,
                            'detail'=> $request->detail,
                            'amount'=> $request->amount,
                            'unit_value'=> $request->unit_value,
                            'subtotal'=> $request->subtotal,
                            'iva'=> $request->iva,
                            'stronghold'=> $request->stronghold,
                            'deductions'=> $request->deductions,
                            'total'=> $request->total,
                            'purchase_invoice_support'=> $request->purchase_invoice_support,
       ]);
       return redirect()->route('purchase_orders.index')->with('success', 'factura de compra hacida creada exitosamente');
   }
 
   // GET
   public function edit($id)
   {
       $purchase_order= purchase_order::find($id);
       $employees = employee::all();
       $providers = provider::all();
       $products = product::all();
       return view('purchase_orders.edit', compact('purchase_order','employees','providers','products'));
   }
 
   // PUT
   public function update(Request $request, $id)
   {
       $purchase_order= purchase_order::find($id)->update($request->all());
       return redirect()->route('purchase_orders.index');
   }
 
   //DELETE
   public function destroy($id)
   {
       $purchase_order = purchase_order::find($id)->delete();
       return redirect()->route('purchase_orders.index');
   }
 }
 
 