<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users'=> $users]);
    }

    public function vehiculos(User $user)
    {   
        $vehiculos = $user->vehiculos;
        return view('vehiculo.index', ['vehiculos'=> $vehiculos]);
    }

    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $newUser = User::create($request->all());
        return redirect()->route('user.index')
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
    public function edit(User $user)
    {
        return view('user.edit', ['user'=>$user]);
    }

    public function update(User $user, Request $request)
    {
        $user->update($request->all());
        return redirect()->route('user.index')
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
