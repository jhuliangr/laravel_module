<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->isTeacher()) {
            $courses = $user->teacher->courses;
        } else {
            $courses = Course::all();
        }

        return view('course.index', compact('courses'));
    }

    public function create() {}

    public function store(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'module_name' => ['required', 'string', 'min:5', 'max:255'],
            'start_date' => ['required', 'date'],
        ]);

        $course = Course::create([
            'module_name' => $validated['module_name'],
            'start_date' => $validated['start_date'],
            'teacher_id' => $user->teacher->id,
        ]);

        return redirect('/course');
    }

    public function show(string $id)
    {
        $course = Course::find($id);

        return view('course.show', compact('course'));
    }

    public function edit(string $id)
    {
        $course = Course::find($id);

        return view('course.show', compact('course'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'module_name' => ['required', 'string', 'min:5', 'max:255'],
            'start_date' => ['required', 'date'],
        ]);

        $course = Course::find($id);
        $course->update($validated);

        return view('course.show', compact('course'));
    }

    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('course.index')->with('success', 'Curso deleted successfully');
    }
}
