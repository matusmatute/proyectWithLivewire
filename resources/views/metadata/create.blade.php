@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded shadow-md">
            <h2 class="text-2xl font-semibold mb-6">Add Metadata</h2>
            <form action="{{ route('metadata.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="game_id" class="block text-sm font-medium text-gray-700">Game</label>
                    <select name="game_id" id="game_id" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                        @foreach ($games as $game)
                            <option value="{{ $game->id }}">{{ $game->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="purchase_date" class="block text-sm font-medium text-gray-700">Purchase Date</label>
                    <input type="date" name="purchase_date" id="purchase_date"
                        class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="calification" class="block text-sm font-medium text-gray-700">Calification</label>
                    <input type="text" name="calification" id="calification"
                        class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="tags" class="block text-sm font-medium text-gray-700">tags</label>
                    <textarea name="tags" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm"></textarea>

                </div>
                <div class="mb-4">
                    <label for="times_played" class="block text-sm font-medium text-gray-700">Times played</label>
                    <input type="number" name="times_played" id="times_played"
                        class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="date_completed" class="block text-sm font-medium text-gray-700">Date completed</label>
                    <input type="date" name="date_completed" id="date_completed"
                        class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                    <textarea name="notes" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                </div>

                <div class="mb-4">
                    <label for="time_of_completion" class="block text-sm font-medium text-gray-700">time_of_completion</label>
                    <input type="number" name="time_of_completion" id="time_of_completion" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm">

                </div>


                <!-- Add input fields for the rest of the fields in the migration here -->
                <div class="mb-4">
                    <label for="have_it" class="block text-sm font-medium text-gray-700">Do you have it?</label>
                    <input type="checkbox" name="have_it" id="have_it" class="mt-1">
                </div>
                <div class="mb-4">
                    <label for="played" class="block text-sm font-medium text-gray-700">Have you played it?</label>
                    <input type="checkbox" name="played" id="played" class="mt-1">
                </div>
                <div class="mb-4">
                    <label for="playing" class="block text-sm font-medium text-gray-700">Are you currently playing
                        it?</label>
                    <input type="checkbox" name="playing" id="playing" class="mt-1">
                </div>
                <button type="submit" class="bg-blue-500 text-black hover:bg-blue-700 py-2 px-4 rounded">Add Metadata</button>
            </form>
        </div>
    </div>
@endsection
