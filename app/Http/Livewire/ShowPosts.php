<?php

namespace App\Http\Livewire;

use App\Models\Console;
use Livewire\Component;

class ShowPosts extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'asc';
    public function render()
    {
        $consoles = Console::where('manufacturer', 'like', '%' . $this->search . '%')
        ->orWhere('name', 'like', '%' . $this->search . '%')
        ->orderBy($this->sort, $this->direction)
        ->get();
       
        return view('livewire.show-posts' , compact('consoles') );



        /**
         * V2.0           v3.0
         * wire:model == wire:model.live
         * 
         * wire:model.lazy == wire:model
         */
    }

    public function edit($id)
    {
        $console = Console::findOrFail($id);
        return redirect()->route('console.edit', ['console' => $console]);
    }

    public function delete($id)
    {
        $console = Console::findOrFail($id);
        $console->delete();
        return redirect()->route('console.index');
    }

    public function order($sort){

        if($this->sort == $sort){
            if($this->direction == 'asc'){
                $this->direction = 'desc';
            }else{
                $this->direction = 'asc';
            }
        }

        $this->sort = $sort;

    }
}
