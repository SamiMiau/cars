<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculo.index', ['vehiculos'=> $vehiculos]);
    }

    public function create()
    {
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newUser = Vehiculo::create($request->all());
        return redirect()->route('vehiculo.index')
            ->with('success','Post created successfully.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculo.edit', ['vehiculo'=>$vehiculo]);
    }

    public function update(Vehiculo $vehiculo, Request $request)
    {
        $vehiculo->update($request->all());
        return redirect()->route('vehiculo.index')
            ->with('success','Updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
