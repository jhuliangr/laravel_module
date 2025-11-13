<?php

namespace Database\Factories;

use App\Models\CourseStudent;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Homework>
 */
class HomeworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'title' =>  $this->faker->sentence(4),
                'body' => $this->faker->paragraphs(3, true),
                'course_student_id' => CourseStudent::factory()
        ];
    }
}
