<div>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-black dark:text-gray-800 leading-tight">
            {{ __('Your') }} {{ __('Games') }}
        </h2>
    </x-slot>


    <div class=" lg:px-8">

        <label for="console" class="text-white">
            Select Console
        </label>
        <br>
        <select label="Console" wire:model="searchConsole" >
            <option value="0" >All Consoles</option>
            @foreach ($consoles as $id => $console)
                <option value="{{ $id }}" >{{ $console }}</option>
                
            @endforeach
            <x-input label="Search" placeholder="Search..." wire:model="search" class="dark:text-black sm:max-w-md" />

            <x-secondary-button class="mr-auto" wire:click="create">
                {{ __('Create Game') }}
            </x-secondary-button>
            <x-secondary-button class="mr-auto" wire:click="indexConsole">
                {{ __('View Console') }}
            </x-secondary-button>
        </select>
        
       

    </div>
       
        <div class="lg:px-8 text-white ">
            <H1> {{ $gamefor->count() }} games</H1>
            
        </div>


        <div class="lg:px-8 ">
            
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        
        
                        <tr>
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                                wire:click="order('id')">ID</th>
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                                wire:click="order('name')">Name Game</th>
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                                wire:click="order('description')">Description</th>
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                                Franquece
                            </th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                                Publisher
                            </th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                                 Developer
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                                wire:click="order('developer')">Genere</th>
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                                wire:click="order('release_date')">Date of Release</th>
                            {{-- <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                                Imagen</th> --}}
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Edit</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse ($gamefor as $game)

                        @if ($game->status == '1')
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4 ">{{ $game->console->name }}</td>
                            <td class="w-1/3 text-left py-3 px-4 ">{{ $game->name }}</td>
                            <td class="w-1/3 text-left py-3 px-4 ">{{ $game->description }}</td>
                            <td class="w-1/3 text-left py-3 px-4 ">{{ $game->franquice }}</td>
                            <td class="w-1/3 text-left py-3 px-4 ">{{ $game->publisher }}</td>
                            <td class="w-1/3 text-left py-3 px-4 ">{{ $game->developer }}</td>
                            <td class="w-1/3 text-left py-3 px-4 ">{{ $game->genere }}</td>
                            <td class="w-1/3 text-left py-3 px-4 ">{{ $game->release_date }}</td>
                            {{-- <td class="w-1/3 text-left py-3 px-4 "> {{ $game->image }}</td> --}}
                            <td class="w-1/3 text-left py-3 px-4 ">
                                <x-secondary-button wire:click="edit({{ $game->id }})">Edit</x-secondary-button>
                            </td>
                            <td class="w-1/3 text-left py-3 px-4 ">
                                <x-danger-button wire:click="delete({{ $game->id }})">Delete</x-danger-button>
                            </td>
                        </tr>
                            
                        @endif
                           
                            @endforeach
                    </tbody>
                   
                </table>
          
                <p class="mt-6 text-gray-500">There are no games.</p>
            
        </div>
        
</div>
