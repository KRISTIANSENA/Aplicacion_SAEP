<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventory;
use App\Models\Product;


class InventoriesController extends Controller
{
    //GET
    public function index()
    {
        $inventories = inventory::all();
        return view('inventories.index', compact('inventories'));
    }

    // GET
    public function create()
    {
        $products = product::all();
        return view('inventories.create', compact('products'));
    }

    //GET
    public function show($id)
    {
        $inventory = inventory::find($id);
        return view('inventories.show', compact('inventory'));
    }

    // POST
    public function store(Request $request)
    {
        $inventory = inventory::create([

            'id'=> $request->id,
            'id_product'=> $request->id_product,
            'state'=> $request->state,
            'design_color'=> $request->design_color,
            'current_quantity'=> $request->current_quantity,
            'factory_data'=> $request->factory_data,
            'warrenty'=> $request->warrenty,
            'worth'=> $request->worth,
        ]);
        return redirect()->route('inventory.index')->with('success', 'inventario actualizado exitosamente');
    }

    // GET
    public function edit($id)
    {
        $inventory= inventory::find($id);
        $products = product::all();
        return view('inventories.edit', compact('inventory','products'));
    }

    // PUT
    public function update(Request $request, $id)
    {
        $inventory= inventory::find($id)->update($request->all());
        return redirect()->route('inventories.index');
    }

    //DELETE
    public function destroy($id)
    {
        $inventory= inventory::find($id)->delete();
        return redirect()->route('inventories.index');
    }
}
