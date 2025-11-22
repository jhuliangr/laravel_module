<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
     /** @use HasFactory<\Database\Factories\CourseStudentFactory> */
    use HasFactory;

     protected $fillable = [
        'user_id',
        'course_id',
    ];

    public function userData()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function courseData()
    {
        return $this->belongsTo(Course::class);
    }

    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }
}
