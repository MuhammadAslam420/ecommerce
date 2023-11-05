<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "title"=>$this->faker->text(25),
            "subtitle"=>$this->faker->text(50),
            "link"=> "http://127.0.0.1:8000/shop",
            "image"=>"slider-".$this->faker->numberBetween(1,5).".png",

        ];
    }
}
