<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shopping;

class ShoppingesController extends Controller
{
//GET
public function index()
{
    $shoppinges = shopping::all();
    return view('shoppinges.index', compact('shoppinges'));
}

// GET
public function create()
{
    $shoppinges = shopping::all();
    return view('shoppinges.create', compact('shoppinges'));
}

//GET
public function show($id)
{
    $shopping = shopping::find($id);
    return view('shoppinges.show', compact('shopping'));
}

// POST
public function store(Request $request)
{
    $shopping = shopping::create(['shopping_id'=> $request->shopping_id,
                                  'customer_id'=> $request->customer_id,
                                  'date_time_shopping'=> $request->date_time_shopping,
                          ]);
    return redirect()->shopping('shoppinges.index')->with('success','Se ha creado correctamente una nueva compra.');
}

// GET
public function edit($id)
{
    $shopping = shopping::find($id);
    return view('shoppinges.edit', compact('shopping'));
}

// PUT
public function update(Request $request, $id)
{
    $shopping = shopping::find($id)->update($request->all());
    return redirect()->shopping('shoppinges.index');
}

//DELETE
public function destroy($id)
{
    $shopping = shopping::find($id)->delete();
    return redirect()->shopping('shoppinges.index');
}
}
