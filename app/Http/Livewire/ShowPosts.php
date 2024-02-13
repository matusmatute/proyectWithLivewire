<?php

namespace App\Http\Livewire;

use App\Models\Console;
use Livewire\Component;
use Dompdf\Dompdf;
use Dompdf\Options;

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
        // Cambiar el estado del juego a inactivo
        $console->status = '0';
        $console->save();
        
        return redirect()->route('console.index');
    }

    public function indexGame()
    {
        return redirect()->route('game.index');
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
    public function generatePdf()
    {
        // Crea una instancia de Dompdf con opciones personalizadas (si es necesario)
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        // Renderiza la vista HTML en PDF
        $html = view('livewire.show-posts')->render();
        $dompdf->loadHtml($html);
        $dompdf->render();

        // Genera el PDF y lo descarga en el navegador
        $dompdf->stream('documento.pdf');
    
    }
}
