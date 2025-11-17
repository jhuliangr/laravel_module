<x-site-layout>
    <div class="bg-gray-200 w-full flex items-center justify-between rounded-xl p-3 mb-5">
        <a href="{{ route('course.index') }}" class="bg-teal-300 p-2 rounded-xl">
            Back
        </a>
        @include('course.create-course-form')
    </div>
    <div class="px-10">
        <div class="bg-gray-100 border rounded-xl p-3">
            {{ $course->module_name }}
        </div>
        <div class="bg-gray-100 border rounded-xl p-3 mt-2">
            {{ $course->start_date }}
        </div>
    </div>
    <div class="w-full h-52 flex items-center justify-center">
        <form action="{{ route('course.destroy', $course->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 py-2 px-10 rounded-xl text-white">
                Delete
            </button>
        </form>
    </div>
</x-site-layout>
