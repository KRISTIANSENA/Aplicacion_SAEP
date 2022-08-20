<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RoutesController extends Controller
{
//GET
public function index()
{
    $routes = route::all();
    return view('routes.index', compact('routes'));
}

// GET
public function create()
{
    $routes = route::all();
    return view('routes.create', compact('routes'));
}

//GET
public function show($id)
{
    $route = route::find($id);
    return view('routes.show', compact('route'));
}

// POST
public function store(Request $request)
{
    $route = route::create(['assigned_route_id'=> $request->assigned_route_id,
                           'employee_id'=> $request->employee_id,
                           'assigned_zone'=> $request->assigned_zone,
                           'quantity_deliveries'=> $request->quantity_deliveries,
                           'service_time'=> $request->service_time,
                           'vehicle_license_plate'=> $request->vehicle_license_plate,
                           'vehicle'=> $request->vehicle,
                           'bill_id'=> $request->bill_id,
                           'delivery_id'=> $request->delivery_id,
                          ]);
    return redirect()->route('stores.index')->with('success','Se ha creado correctamente una nueva Ruta de entrega.');
}

// GET
public function edit($id)
{
    $route = route::find($id);
    return view('routes.edit', compact('route'));
}

// PUT
public function update(Request $request, $id)
{
    $route = route::find($id)->update($request->all());
    return redirect()->route('routes.index');
}

//DELETE
public function destroy($id)
{
    $route = route::find($id)->delete();
    return redirect()->route('routes.index');
}
}
