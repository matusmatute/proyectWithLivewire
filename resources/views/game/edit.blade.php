<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-900 leading-tight">
            {{ __('Games') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('game.update', $game->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') {{-- Add this line to indicate that it's a PUT request for updating --}}
                    
                    <div class="mb-4">
                        <label for="console_id" class="block text-sm font-medium text-gray-700">Console</label>
                        <select name="console_id" id="console_id" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                            @foreach ($consoles as $console)
                                <option value="{{ $console->id }}" {{ old('console_id', $game->console_id) == $console->id ? 'selected' : '' }}>{{ $console->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $game->name) }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $game->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <!-- Add fields for the rest of the game data, similar to the console update form -->
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image" accept="image/*" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-blue-500 text-black hover:bg-blue-700 py-2 px-4 rounded">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
