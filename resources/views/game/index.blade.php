<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Games') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="  lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
              <!--  <x-welcome /> -->
              @livewire('show-games')

            </div>
        </div>
    </div>
</x-app-layout>