<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StudentRow extends Component
{
  /**
   * Create a new component instance.
   */
  public function __construct(public User $student, public ?string $courseId)
  {
  }

  public function render(): View|Closure|string
  {
    return view('components.student-row');
  }
}
