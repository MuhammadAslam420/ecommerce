<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->unique()->words($no = 2, $astext = true);
        $slug = Str::slug($title);
        return [
            //
            'category_id'=>$this->faker->numberBetween(1,20),
            'title'=>$title,
            'slug'=>$slug,
            'image'=>'blog-'.$this->faker->numberBetween(1,9).'.jpg',
            'description'=>$this->faker->text(200)
        ];
    }
}
