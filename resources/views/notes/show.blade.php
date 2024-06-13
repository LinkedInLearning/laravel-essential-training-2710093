<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Notes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="flex gap-6">
              <p class="opacity-70"><strong>Created:</strong> {{ $note->created_at->diffForHumans() }}</p>
              <p class="opacity-70"><strong>Last changed:</strong> {{ $note->updated_at->diffForHumans() }}</p>
            </div>
            <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
              <h2 class="font-bold text-4xl text-indigo-600">
                {{ $note->title }}
                </h2>
              <p class="mt-4 whitespace-pre-wrap">{{ $note->text }}</p>
            </div>

        </div>
    </div>
</x-app-layout>
