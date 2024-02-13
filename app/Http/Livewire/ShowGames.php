<?php

namespace App\Http\Livewire;

use App\Models\Console;
use App\Models\Game;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Livewire\Component;

class ShowGames extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'asc';
    public $searchGame = '';
    public $searchConsole = 0;
 
    public Collection $consoles;
    

    public function mount(): void
    {
        $this->consoles = Console::pluck('name', 'id');
    }

    public function render()
    {
       $gamefor = Game::with('console')
       ->when($this->searchConsole != 0, fn(Builder $query) => $query->where('console_id', $this->searchConsole))
       ->paginate(100);

        return view('livewire.show-games', ['gamefor' => $gamefor]);
    
    
    }

    public function create()
    {
        return redirect()->route('game.create', ['consoles' => Console::all()]);
    }

    public function indexConsole()
    {
        return redirect()->route('console.index');
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return redirect()->route('game.edit', ['game' => $game]);
    }

    public function delete($id)
    {
        $game = Game::findOrFail($id);
        // Cambiar el estado del juego a inactivo
        $game->status = '0';
        $game->save();
        
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
