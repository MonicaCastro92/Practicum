<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Cita::all();
        return view('citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('citas.create');     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombrepaciente' => 'required|string|max:255',
            'nombremedico' => 'required|string|max:255',
            'fecha' => 'required|string|max:255',
            'motivo' => 'required|string|max:255',

        ]);

        Cita::create($request->all());
        return redirect()->route('citas.index')->with('success','Cita creada satisfactoriamente');    
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        return view('citas.show', compact('cita')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        return view('citas.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'nombrepaciente' => 'required|string|max:255',
            'nombremedico' => 'required|string|max:255',
            'fecha' => 'required|string|max:255',
            'motivo' => 'required|string|max:255',

        ]);

        $cita->update($request->all());
        return redirect()->route('citas.index')->with('success','Cita actualizada satisfactoriamente');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success','Cita eliminada satisfactoriamente');
    }
}
