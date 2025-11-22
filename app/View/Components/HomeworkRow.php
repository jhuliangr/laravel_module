<?php

namespace App\View\Components;

use App\Models\Homework;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeworkRow extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Homework $hw, public ?string $withStudentName)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.homework-row');
    }
}
