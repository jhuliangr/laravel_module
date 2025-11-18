<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $is_teacher = auth()->user()->isTeacher();
        return view('layouts.app', compact('is_teacher'));
    }
}
