<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('console.index', ['consoles' => Console::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('console.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',   
            'manufacturer' => 'required',
            'release_date' => 'required',
        ]);

        $console = new Console();
        $console->user_id = auth()->user()->id;
        $console->name = $request->name;
        $console->manufacturer = $request->manufacturer;
        $console->release_date = $request->release_date;
        $console->save();
        return redirect()->route('console.index')->with('success', 'Console created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Console $console)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Console $console)
    {
        
        return view('console.edit', ['console' => $console]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Console $console)
    {
         // Validar los datos del formulario
    $request->validate([
        'name' => 'required|string|max:255',
        'manufacturer' => 'required|string|max:255',
        'release_date' => 'required|date',
    ]);

    // Actualizar los datos del modelo Console con los datos del formulario
    $console->update([
        'name' => $request->input('name'),
        'manufacturer' => $request->input('manufacturer'),
        'release_date' => $request->input('release_date'),
        // Puedes agregar más campos según sea necesario
    ]);

    // Redireccionar a la vista o ruta deseada después de la actualización
    return redirect()->route('console.index')->with('success', 'Console updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Console $console)
    {
        //
    }
}
