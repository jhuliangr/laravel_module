<?php

namespace App\Http\Controllers;

use App\Models\Homework;

class HomeWorkController extends Controller
{
    public function index()
    {
        $homeworks = Homework::all();

        return view('homework.index', compact('homeworks'));
    }

    public function show($id)
    {
        $homework = Homework::find($id);

        return view('homework.show', compact('homework'));
    }
}
