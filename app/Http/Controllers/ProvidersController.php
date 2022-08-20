<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProvidersController extends Controller
{
    //GET
    public function index()
    {
        $providers = provider::all();
        return view('providers.index', compact('providers'));
    }

    // GET
    public function create()
    {
        $providers = provider::all();
        return view('providers.create', compact('providers'));
    }

    //GET
    public function show($id)
    {
        $provider = provider::find($id);
        return view('providers.show', compact('provider'));
    }

    // POST
    public function store(Request $request)
    {
        $provider = provider::create(['provider_id' => $request->provider_id,
            'provider_name' => $request->provider_name,
            'nit' => $request->nit,
            'business_type' => $request->business_type,
            'telephone' => $request->telephone,
            'address' => $request->address,
            'place' => $request->place,
            'metod_conveyance' => $request->metod_conveyance
        ]);
        return redirect()->route('providers.index')->with('success', 'Empleado creado exitosamente');
    }

    // GET
    public function edit($id)
    {
        $provider= provider::find($id);
        return view('providers.edit', compact('provider'));
    }

    // PUT
    public function update(Request $request, $id)
    {
        $provider= provider::find($id)->update($request->all());
        return redirect()->route('providers.index');
    }

    //DELETE
    public function destroy($id)
    {
        $provider = provider::find($id)->delete();
        return redirect()->route('providers.index');
    }
}

