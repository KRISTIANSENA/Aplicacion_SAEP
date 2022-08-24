<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    //GET
    public function index()
    {
        $employees = employee::all();
        return view('employees.index', compact('employees'));
    }

    // GET
    public function create()
    {
        $employees = employee::all();
        return view('employees.create', compact('employees'));
    }

    //GET
    public function show($id)
    {
        $employee = employee::find($id);
        return view('employees.show', compact('employee'));
    }

    // POST
    public function store(Request $request)
    {
        $employee = employee::create(['employee_id' => $request->employee_id,
                                'user_id' => $request->user_id,
                                'employee_name' => $request->employee_name,
                                'employee_last_name' => $request->employee_last_name,
                                'identification_type' => $request->identification_type,
                                'identification_number' => $request->identification_number,
                                'email' => $request->email,
                                'address' => $request->address,
                                'charge' => $request->charge,
                                'date_of_birth' => $request->date_of_birth,
                                'phone_number' => $request->phone_number,
        ]);
        return redirect()->route('employees.index')->with('success', 'Empleado creado exitosamente');
    }

    // GET
    public function edit($id)
    {
        $employee= employee::find($id);
        return view('employees.edit', compact('employee'));
    }

    // PUT
    public function update(Request $request, $id)
    {
        $employee= employee::find($id)->update($request->all());
        return redirect()->route('employees.index');
    }

    //DELETE
    public function destroy($id)
    {
        $employee = employee::find($id)->delete();
        return redirect()->route('employees.index');
    }
}
