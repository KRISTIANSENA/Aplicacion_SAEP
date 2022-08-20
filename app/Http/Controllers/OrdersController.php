<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
//GET
public function index()
{
    $orders = order::all();
    return view('orders.index', compact('orders'));
}

// GET
public function create()
{
    $orders = order::all();
    return view('orders.create', compact('orders'));
}

//GET
public function show($id)
{
    $order = order::find($id);
    return view('orders.show', compact('order'));
}

// POST
public function store(Request $request)
{
    $order = order::create([
                           'order_id'=> $request->order_id,
                           'provider_id'=> $request->provider_id,
                           'product_id'=> $request->product_id,
                           'date_time_order'=> $request->date_time_order,
                           'date_time_received'=> $request->date_time_received,
                           'state'=> $request->state,
                           'amount'=> $request->amount,   
                          ]);
    return redirect()->route('orders.index')->with('success','Se ha creado correctamente una nueva Ordenes.');
}

// GET
public function edit($id)
{
    $order = order::find($id);
    return view('orders.edit', compact('order'));
}

// PUT
public function update(Request $request, $id)
{
    $order = order::find($id)->update($request->all());
    return redirect()->route('orders.index');
}

//DELETE
public function destroy($id)
{
    $order = order::find($id)->delete();
    return redirect()->route('orders.index');
}
}



