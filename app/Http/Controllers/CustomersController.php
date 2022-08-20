<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    //GET
    public function index()
    {
        $customers = customer::all();
        return view('customers.index', compact('customers'));
    }

    // GET
    public function create()
    {
        $customers = customer::all();
        return view('Customers.create', compact('customers'));
    }

    //GET
    public function show($id)
    {
        $customer = customer::find($id);
        return view('customers.show', compact('customer'));
    }

    // POST
    public function store(Request $request)
    {
        $customer = customer::create(['customer_id' => $request->customer_id,
            'user_id' => $request->user_id,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'identification_type' => $request->identification_type,
            'identification_number' => $request->identification_number,
            'business_name' => $request->business_name,
            'telephone' => $request->telephone,
            'address' => $request->address,
        ]);
        return redirect()->route('customers.index')->with('success', 'Empleado creado exitosamente');
    }

    // GET
    public function edit($id)
    {
        $customer= customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    // PUT
    public function update(Request $request, $id)
    {
        $customer= customer::find($id)->update($request->all());
        return redirect()->route('customers.index');
    }

    //DELETE
    public function destroy($id)
    {
        $customer =customer::find($id)->delete();
        return redirect()->route('customers.index');
    }
}
