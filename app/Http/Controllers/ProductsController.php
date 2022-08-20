<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    //GET
    public function index()
    {
        $products = product::all();
        return view('products.index', compact('products'));
    }

    // GET
    public function create()
    {
        $products = product::all();
        return view('products.create', compact('products'));
    }

    //GET
    public function show($id)
    {
        $product = product::find($id);
        return view('products.show', compact('product'));
    }

    // POST
    public function store(Request $request)
    {
        $product = product::create(['product_id'=> $request->product_id,
            'product_name'=> $request->product_name,
            'brand'=> $request->brand,
            'model'=> $request->model,
            'state'=> $request->state,
            'design_color'=> $request->design_color,
            'Current_Quantity'=> $request->Current_Quantity,
            'factory_date'=> $request->factory_date,
            'warranty' => $request->warranty,
            'worth'=> $request->worth,
        ]);
        return redirect()->route('products.index')->with('success','Se ha creado correctamente un nevo producto.');
    }

    // GET
    public function edit($id)
    {
        $product= product::find($id);
        return view('products.edit', compact('product'));
    }

    // PUT
    public function update(Request $request, $id)
    {
        $product = product::find($id)->update($request->all());
        return redirect()->route('products.index');
    }

    //DELETE
    public function destroy($id)
    {
        $product = product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
