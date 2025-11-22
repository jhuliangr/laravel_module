<?php

namespace App\Http\Controllers;

use App\Models\CourseStudent;
use App\Models\Homework;
use Illuminate\Http\Request;

class HomeWorkController extends Controller
{
    public function index(Request $request, string $courseId)
    {
        $user = auth()->user();
        $courseStudent = CourseStudent::where('user_id', $user->id)
            ->where('course_id', $courseId)
            ->first();

        if (!$courseStudent) {
            return collect();
        }
        $homeworks = Homework::where('course_student_id', $courseStudent->id)->get();

        return view('homework.index', compact('homeworks', 'courseId'));
    }

    public function show(string $id)
    {
        $homework = Homework::find($id);

        return view('homework.show', compact('homework'));
    }

    public function store(Request $request, string $id)
    {
        $user = auth()->user();
        $validated = $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'body' => ['required', 'string', 'min:5', 'max:3000'],
        ]);

        $courseStudentId = $user->courseStudent()->where('course_id', $id)->first()->id;

        Homework::create([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'course_student_id' => $courseStudentId
        ]);

        return redirect(route('homework.index', $id));
    }
}
