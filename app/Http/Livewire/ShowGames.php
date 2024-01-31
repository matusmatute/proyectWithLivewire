<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class ShowGames extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'asc';

    public function render()
    {
        $games = Game::where('developer', 'like', '%' . $this->search . '%')
            ->orWhere('name', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->get();

        return view('livewire.show-games', compact('games'));
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return redirect()->route('game.edit', ['game' => $game]);
    }

    public function delete($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        return redirect()->route('game.index');
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            $this->direction = ($this->direction == 'asc') ? 'desc' : 'asc';
        }

        $this->sort = $sort;
    }
}
