<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;
use App\Models\Route;


class DeliveriesController extends Controller
{
    //GET
    public function index()
    {
        $deliveries = delivery::all();
        return view('deliveries.index', compact('deliveries'));
    }

    // GET
    public function create()
    {
      
        $routes = route::all();
        return view('deliveries.create', compact('routes'));
    }

    //GET
    public function show($id)
    {
        $delivery = delivery::find($id);
        return view('deliveries.show', compact('delivery'));
    }

    // POST
    public function store(Request $request)
    {
        $delivery = delivery::create(['delivery_id'=> $request->delivery_id,
                                      'estate'=> $request->estate,
                                      'date_time_delivery'=> $request->date_time_delivery,
                                      'observation'=> $request->observation
                                     ]);
        return redirect()->route('deliveries.index')->with('success','Se ha creado correctamente una nueva Entrega.');
    }

    // GET
    public function edit($id)
    {
        $delivery = delivery::find($id);
        return view('deliveries.edit', compact('delivery'));
    }

    // PUT
    public function update(Request $request, $id)
    {
        $delivery = delivery::find($id)->update($request->all());
        return redirect()->route('deliveries.index');
    }

    //DELETE
    public function destroy($id)
    {
        $delivery = delivery::find($id)->delete();
        return redirect()->route('deliveries.index');
    }
}

