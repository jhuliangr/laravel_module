<x-site-layout title="Homework">
  <div class="flex items-center justify-between mb-5 px-5">
    <x-back-button/>
  </div>
    <div class="text-center">
        <p class="text-xl font-bold p-5">
            {{ $homework->title }}
        </p>
        <textarea class="rounded-lg w-3/4 h-96 p-4 border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none overflow-y-auto" readonly>
          {{ $homework->body }}
        </textarea>

    </div>
</x-site-layout>
