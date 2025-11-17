<x-site-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center px-3 py-2">
                Hello
                @if ($teacher)
                    teacher!
                @else
                    student!
                @endif

                <a class="py-3 px-5 bg-teal-400 hover:bg-teal-300 rounded-xl cursor-pointer"
                    href="{{ route('course.pick') }}">
                    Select courses
                </a>
                @if ($teacher)
                    <a class="py-3 px-5 bg-teal-400 hover:bg-teal-300 rounded-xl cursor-pointer"
                        href="{{ route('course.index') }}">
                        Admin your courses
                    </a>
                @endif
            </div>
            <div class="mt-10">
                <a class="py-3 px-5 rounded-xl bg-teal-300" href="{{ route('courses.my_courses') }}">
                    Go to my courses
                </a>
            </div>

        </div>
    </div>
</x-site-layout>
