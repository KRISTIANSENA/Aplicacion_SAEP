<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sale;


class SalesController extends Controller
{
    //GET
    public function index()
    {
        $sales  = sale::all();
        return view('sales.index', compact('sales'));
    }

    // GET
    public function create()
    {
        $sales = sale::all();
        return view('sales.create', compact('sales'));
    }

    //GET
    public function show($id)
    {
        $sale = sale::find($id);
        return view('sales.show', compact('sale'));
    }

    // POST
    public function store(Request $request)
    {
        $sale = sale::create(['sale_id'=> $request->sale_id,
            'employee_id'=> $request->employee_id,
            'date_time_sale'=> $request->date_time_sale,
            'date_time_packing'=> $request->date_time_packing,
            'date_time_dispatch'=>$request->date_time_dispatch,
        ]);
        return redirect()->route('sale.index')->with('success','Se ha creado correctamente una nueva venta');
    }

    // GET
    public function edit($id)
    {
        $sale = sale::find($id);
        return view('sale.edit', compact('sale'));
    }

    // PUT
    public function update(Request $request, $id)
    {
        $sale = sale::find($id)->update($request->all());
        return redirect()->route('sale.index');
    }

    //DELETE
    public function destroy($id)
    {
        $sale = sale::find($id)->delete();
        return redirect()->route('sales.index');
    }
}
