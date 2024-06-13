<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Notes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg max-w-2xl">
              <form action="{{ route('notes.store') }}" method="post">
                @csrf
                <x-text-input name="title" class="w-full" placeholder="Note title"></x-text-input>
                <x-textarea name="text" placeholder="Type your note" rows="8" value="" class="w-full mt-6"></x-textarea>
                <x-primary-button class="mt-6">Save note</x-primary-button>
              </form>
            </div>
        </div>
    </div>
</x-app-layout>
