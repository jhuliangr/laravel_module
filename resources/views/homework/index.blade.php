<x-site-layout>
    @if ($homeworks->isEmpty())
        <h3>No homeworks found</h3>
    @else
        <div class="flex items-center justify-between mb-5">
            <x-back-button />
            @include('components.homework-form', ['id' => $courseId])
        </div>
        @foreach ($homeworks as $hw)
            <x-homework-row :hw="$hw" />
        @endforeach
    @endif
</x-site-layout>
