<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-gray-800 leading-tight">
            {{ __('Your') }} {{ __('Consoles') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-black  py-6 align-middle">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-black dark:text-black dark:text-gray-900 ">
            <x-input label="Search" placeholder="Search..." wire:model="search" class="dark:text-black  sm:max-w-md" />


        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
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
                            <th class="cursor-pointer w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                                wire:click="order('id')">Edit</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($consoles as $console)
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4 ">{{ $console->id }}</td>
                                <td class="w-1/3 text-left py-3 px-4 ">{{ $console->name }}</td>
                                <td class="w-1/3 text-left py-3 px-4 ">{{ $console->manufacturer }}</td>
                                <td class="text-left py-3 px-4 ">{{ $console->release_date }}</td>
                                <td class="w-1/3 text-left py-3 px-4 ">
                                    <x-secondary-button wire:click="edit({{ $console->id }})">Edit</x-secondary-button>
                                    <a href="{{ route('console.edit', $console->id) }}"
                                        class="btn btn-primary">Edit</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="mt-6 text-gray-500">There are no consoles.</p>


            @endif

        </div>

    </div>

</div>
