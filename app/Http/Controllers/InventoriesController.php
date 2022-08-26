<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Sale_invoice;

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
        
        $income_products = income_product::all();
        return view('inventories.create', compact('income_products'));
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
            'id_sales_invoices'=> $request->id_sales_invoices,
            'state'=> $request->state,
            'design_color'=> $request->design_color,
            'Current_Quantity'=> $request->Current_Quantity,
            'factory_date'=> $request->factory_date,
            'warranty'=> $request->warranty,
            'worth'=> $request->worth,
        ]);
        return redirect()->route('inventories.index')->with('success', 'inventario actualizado exitosamente');
    }
    
    // GET
    public function edit($id)
    {
        $inventory= inventory::find($id);
        $sales_invoices = sale_invoice::all();
        return view('inventories.edit', compact('inventory','sales_invoices'));
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
