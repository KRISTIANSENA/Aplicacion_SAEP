<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Product;

class BillsController extends Controller
{
    //GET
    public function index()
    {
        $bills = bill::all();
        return view('bills.index', compact('bills'));
    }

    // GET
    public function create()
    {
        $products = product::all();
        return view('bills.create', compact('products'));
    }

    //GET
    public function show($id)
    {
        $bill = bill::find($id);
        return view('bills.show', compact('bill'));
    }

    // POST
    public function store(Request $request)
    {
        $bill = bill::create([  'product_id'=> $request->product_id,
                                'amount'=> $request->amount,
                                'payment_method'=> $request->payment_method,
                                'date_time_payment'=> $request->date_time_payment,
                                'sale_id'=> $request->sale_id,
                                'shopping_id'=> $request->shopping_id
                             ]);
        return redirect()->route('bills.index')->with('success','Se ha creado correctamente una nueva factura.');
    }

    // GET
    public function edit($id)
    {
        $bill = bill::find($id);
        return view('bills.edit', compact('bill'));
    }

    // PUT
    public function update(Request $request, $id)
    {
        $bill = bill::find($id)->update($request->all());
        return redirect()->route('bills.index');
    }

    //DELETE
    public function destroy($id)
    {
        $bill = bill::find($id)->delete();
        return redirect()->route('bills.index');
    }
}
