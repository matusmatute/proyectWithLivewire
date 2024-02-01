<?php

namespace App\Http\Controllers;

use App\Models\Console;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('game.index', ['games' => Game::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('game.create', ['consoles' => Console::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'console_id' => 'required',
            'release_date' => 'required',   
            'image' => 'required',
            'developer' => 'required',
            'publisher' => 'required',
            'franquice' => 'required',
            'genere' => 'required',
            'theme' => 'required',
            'clasification' => 'required',
            'type' => 'required',

        ]);

        $game = new Game();
        $game->console_id = $request->console_id;
        $game->name = $request->name;
        $game->description = $request->description;
        $game->release_date = $request->release_date;
        $game->image = $request->image;
        $game->developer = $request->developer;
        $game->publisher = $request->publisher;
        $game->franquice = $request->franquice;
        $game->genere = $request->genere;
        $game->theme = $request->theme;
        $game->clasification = $request->clasification;
        $game->type = $request->type;
        $game->save();
        return redirect()->route('game.index')->with('success', 'Game created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
        return view('game.edit', ['game' => $game]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'developer' => 'required',
            'publisher' => 'required',
            'franquice' => 'required',
            'genere' => 'required',
            'theme' => 'required',
            'clasification' => 'required',
            'type' => 'required',
            'console_id' => 'required',
            'release_date' => 'required',
            'image' => 'required',
        ]);

        $game->update([
            'name' => $request->name,
            'description' => $request->description,
            'developer' => $request->developer,
            'publisher' => $request->publisher,
            'franquice' => $request->franquice,
            'genere' => $request->genere,
            'theme' => $request->theme,
            'clasification' => $request->clasification,
            'type' => $request->type,
            'console_id' => $request->console_id,
            'release_date' => $request->release_date,
            'image' => $request->image,

        ]);

        return redirect()->route('game.index')->with('success', 'Game updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
