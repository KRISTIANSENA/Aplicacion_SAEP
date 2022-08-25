<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale_invoice;

class Sales_invoicesController extends Controller
{
    //GET
    public function index()
    {
        $sales_invoices = sale_invoice::all();
        return view('sales_invoices.index', compact('sales_invoices'));
    }

    // GET
    public function create()
    {
        $sales_invoices = sale_invoice::all();
        return view('sales_invoices.create', compact('sales_invoices'));
    }

    //GET
    public function show($id)
    {
        $sale_invoice = sale_invoice::find($id);
        return view('sales_invoices.show', compact('sale_invoice'));
    }

    // POST
    public function store(Request $request)
    {
        $sale_invoice = sale_invoice::create(['sales_invoices' => $request->id,
            'id_employee' => $request->id_employee,
            'id_customer' => $request->id_customer,
            'id_product' => $request->id_product,
            'detail' => $request->detail,
            'amount'=>$request->amount,
            'unit_value'=>$request->unit_value,
            'subtotal'=>$request->subtotal,
            'iva'=>$request->iva,
            'stronghold'=>$request->stronghold,
            'deductions'=>$request->deductions,
            'total'=>$request->total,
            'sales_invoices_support'=>$request->sales_invoices_support,


        ]);
        return redirect()->route('sales_invoices.index')->with('success', 'Se ha creado correctamente una nueva venta');
    }

    // GET
    public function edit($id)
    {
        $sale_invoice = sale_invoice::find($id);
        return view('sales_invoices.edit', compact('sale_invoice'));
    }

    // PUT
    public function update(Request $request, $id)
    {
        $sale_invoice = sale_invoice::find($id)->update($request->all());
        return redirect()->route('sales_invoices.index');
    }

    //DELETE
    public function destroy($id)
    {
        $sale_invoice = sale_invoice::find($id)->delete();
        return redirect()->route('sales_invoices.index');
    }


}
