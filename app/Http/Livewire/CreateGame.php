<?php

namespace App\Http\Livewire;

use App\Models\Console;
use Livewire\Component;

class CreateGame extends Component
{
    public function render()
    {
        $consoles = Console::all();
        return view('livewire.create-game', compact( 'consoles') );
    }
}
