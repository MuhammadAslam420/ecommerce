<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            //
            "category_id"=>$this->faker->numberBetween(1,20),
            "brand_id"=>$this->faker->numberBetween(1,6),
            "name"=>$name,
            "slug"=>$slug,
            "short_description"=>$this->faker->text(75),
            "description"=>$this->faker->text(200),
            "price"=>$this->faker->numberBetween(100,500),
            "featured"=>1,
            "status"=>"active",
            "front_image"=>"product-".$this->faker->numberBetween(1,20).".jpg",
            "back_image"=>"product-".$this->faker->numberBetween(1,20).".jpg",
            "quantity"=>25,
            "stock"=>"InStock"
        ];
    }
}
