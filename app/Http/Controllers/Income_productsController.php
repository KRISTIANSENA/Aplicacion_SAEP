<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income_product;

class Income_productsController extends Controller
{
    //GET
    public function index()
    {
        $income_products = income_product::all();
        return view('income_products.index', compact('income_products'));
    }

    // GET
    public function create()
    {
        $income_products = income_product::all();
        return view('income_products.create', compact('income_products'));
    }

    //GET
    public function show($id)
    {
        $income_product = income_product::find($id);
        return view('income_products.show', compact('income_product'));
    }

    // POST
    public function store(Request $request)
    {
        $income_product = income_product::create([
            'id_purchase_orders'=> $request->id_purchase_orders,
            'id_product'=> $request->id_product,
            'amount'=> $request->amount,
            'batch'=> $request->batch,
            'date_of_admission	'=> $request->date_of_admission,
      
        ]);
        return redirect()->route('income_products.index')->with('success', 'Orden de compra creada exitosamente');
    }

    // GET
    public function edit($id)
    {
        $income_product= income_product::find($id);
        return view('income_products.edit', compact('income_product'));
    }

    // PUT
    public function update(Request $request, $id)
    {
        $income_product= income_product::find($id)->update($request->all());
        return redirect()->route('income_products.index');
    }

    //DELETE
    public function destroy($id)
    {
        $income_product = income_product::find($id)->delete();
        return redirect()->route('income_products.index');
    }
}