<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-gray-800 leading-tight">
            {{ __('Your') }} {{ __('Consoles') }}
        </h2>
    </x-slot>


        <div class="lg:px-8 ">
            <br>
            <x-input label="Search" placeholder="Search..." wire:model="search" class="dark:text-black  sm:max-w-md" />
            <x-secondary-button class="mr-auto" wire:click="indexGame">
                {{ __('View Game') }}
            </x-secondary-button>
            <x-secondary-button class="mr-auto" >
                <a href="{{ route('generar.pdf') }}">  {{ __('View PDF') }}</a>
            </x-secondary-button>


        </div>
        <div class="lg:px-8 ">
            @if ($consoles->count())
                <!-- component -->
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">

                        <tr>
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                                wire:click="order('id')">ID</th>
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                                wire:click="order('name')">Name Console</th>
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                                wire:click="order('manufacturer')">Manufacturer</th>
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                                wire:click="order('release_date')">Date of Realse</td>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Edit</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Delete</th>

                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($consoles as $console)
                        @if ($console->status == '1')
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4 ">{{ $console->id }}</td>
                                <td class="w-1/3 text-left py-3 px-4 ">{{ $console->name }}</td>
                                <td class="w-1/3 text-left py-3 px-4 ">{{ $console->manufacturer }}</td>
                                <td class="text-left py-3 px-4 ">{{ $console->release_date }}</td>
                                <td class="w-1/3 text-left py-3 px-4 ">
                                <x-secondary-button wire:click="edit({{ $console->id }})">Edit</x-secondary-button>
                                </td>
                                <td class="w-1/3 text-left py-3 px-4 ">
                                    <x-danger-button wire:click="delete({{ $console->id }})">Delete</x-danger-button>
                                </td>

                            </tr>
                            @endif
                        @endforeach
                        
                    </tbody>
                </table>
            @else
                <p class="mt-6 text-gray-500">There are no consoles.</p>


            @endif

        </div>

    </div>

</div>
