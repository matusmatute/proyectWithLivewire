<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Metadata;
use Illuminate\Http\Request;

class MetadataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('metadata.index', ['metadatas' => Metadata::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('metadata.create', ['games' => Game::all()]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            
            'game_id' => 'required',
            'purchase_date' => 'required',
            'calification' => 'required',
            'tags' => 'required',
            'times_played' => 'required',
            'date_completed' => 'required',
            'time_of_completion' => 'required',
            
        ]);

        $metadata = new Metadata();
        $metadata->game_id = $request->game_id;
        $metadata->purchase_date = $request->purchase_date;
        $metadata->calification = $request->calification;
        $metadata->tags = $request->tags;
        $metadata->times_played = $request->times_played;
        $metadata->date_completed = $request->date_completed;
        $metadata->time_of_completion = $request->time_of_completion;
        $metadata->have_it = $request->have_it;
        $metadata->played = $request->played;
        $metadata->playing = $request->playing;
        $metadata->save();
        return redirect()->route('metadata.index')->with('success', 'Metadata created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Metadata $metadata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Metadata $metadata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Metadata $metadata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Metadata $metadata)
    {
        //
    }
}
