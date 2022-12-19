<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'=>array_rand([1,2,3,4,5,6,7,8,9,10]),
            'title'=>fake()->word(),
            'lesson_slug'=>fake()->slug(),
            'body'=>'<p>' . implode('</p><p>', fake()->paragraphs(20)) . '</p>'
        ];
    }
}
