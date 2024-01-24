<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historico;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historicos = Historico::all();
        return view('historico.index',['historicos'=> $historicos]);
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
