<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\User;
use App\Models\Historico;

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
        $users = User::all();
        return view('vehiculo.create', ['users'=>$users]);
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
        $users = User::all();
        return view('vehiculo.edit', ['vehiculo'=>$vehiculo,'users'=>$users]);
    }

    public function update(Vehiculo $vehiculo, Request $request)
    {
        if($vehiculo->user_id != $request->user_id){
            $newHistorico = Historico::create([
                'vehiculo_id' => $vehiculo->id,
                'old_user_id' => $vehiculo->user_id,
                'new_user_id' => $request->user_id,
            ]);
        }
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
