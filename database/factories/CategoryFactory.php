<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->words($no=2,$astext=true);
        $slug=Str::slug($name);
        return [
            "name"=>$name,
            "slug"=>$slug,
            "logo"=> "category-thumb-".$this->faker->numberBetween(1,20).'.jpg',
        ];
    }
}
