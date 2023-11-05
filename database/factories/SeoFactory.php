<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seo>
 */
class SeoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'page_name' => $this->faker->word,
            'title' => $this->faker->sentence,
            'type' => $this->faker->word,
            'url' => $this->faker->url,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
