<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Homework;
use App\Models\Evaluation;
use App\Models\CourseStudent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();
        Teacher::factory(5)->create();
        Course::factory(10)->create();
        CourseStudent::factory(10)->create();
        Homework::factory(10)->create();
        Evaluation::factory(10)->create();
    }
}
