<x-site-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
            @if ($teacher)
                You're logged in as a teacher
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($teacher)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center px-3">
                    Hello teacher!
                    <a class="py-3 px-5 bg-teal-400 hover:bg-teal-300 rounded-xl cursor-pointer" href="{{ route('course.index') }}">
                        Admin your courses
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-site-layout>
