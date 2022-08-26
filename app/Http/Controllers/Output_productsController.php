<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Output_product;
use App\Models\Sale_invoice;
class Output_productsController extends Controller
{
   //GET
   public function index()
   {
       $output_products = output_product::all();
       return view('output_products.index', compact('output_products'));
   }

   // GET
   public function create()
   {
       $output_products = output_product::all();
       $sales_invoices = sale_invoice::all();
       return view('output_products.create', compact('output_products','sales_invoices'));
   }

   //GET
   public function show($id)
   {
       $output_product = output_product::find($id);
       return view('output_products.show', compact('output_product'));
   }

   // POST
   public function store(Request $request)
   {
       $output_product = output_product::create([
           'id_sales_invoices'=> $request->id_sales_invoices,
           'amount'=> $request->amount,
           'batch'=> $request->batch,
           'departure_date'=> $request->departure_date,
       ]);
       return redirect()->route('output_products.index')->with('success', 'Orden de compra creada exitosamente');
   }

   // GET
   public function edit($id)
   {
       $output_product= output_product::find($id);
       $sales_invoices = sale_invoice::all();
       return view('output_products.edit', compact('output_product','sales_invoices'));
   }

   // PUT
   public function update(Request $request, $id)
   {
       $output_product= output_product::find($id)->update($request->all());
       return redirect()->route('output_products.index');
   }

   //DELETE
   public function destroy($id)
   {
       $output_product = output_product::find($id)->delete();
       return redirect()->route('output_products.index');
   }
}