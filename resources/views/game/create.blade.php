@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('game.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="console_id" class="block text-sm font-medium text-gray-700">Console</label>
                        <select name="console_id" id="console_id" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                            @foreach ($consoles as $console)
                                <option value="{{ $console->id }}">{{ $console->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="franquice" class="block text-sm font-medium text-gray-700">Franquice</label>
                        <input type="text" name="franquice" id="franquice" value="{{ old('franquice') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('franquice')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="developer" class="block text-sm font-medium text-gray-700">Developer</label>
                        <input type="text" name="developer" id="developer" value="{{ old('developer') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('developer')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="release_date" class="block text-sm font-medium text-gray-700">Release Date</label>
                        <input type="date" name="release_date" id="release_date" value="{{ old('release_date') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('release_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="publisher" class="block text-sm font-medium text-gray-700">Publisher</label>
                        <input type="text" name="publisher" id="publisher" value="{{ old('publisher') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('publisher')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="genere" class="block text-sm font-medium text-gray-700">Genere</label>
                        <input type="text" name="genere" id="genere" value="{{ old('genere') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('genere')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="theme" class="block text-sm font-medium text-gray-700">Theme</label>
                        <input type="text" name="theme" id="theme" value="{{ old('theme') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('theme')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="clasification" class="block text-sm font-medium text-gray-700">Clasification</label>
                        <input type="text" name="clasification" id="clasification" value="{{ old('clasification') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('clasification')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="type" class="block text-sm font-medium text-gray-700">type</label>
                        <input type="text" name="type" id="type" value="{{ old('type') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('type')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                        
                    <!-- Add input fields for the rest of the fields in the migration here -->
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image" accept="image/*" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-blue-500 text-black hover:bg-blue-700 py-2 px-4 rounded">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
