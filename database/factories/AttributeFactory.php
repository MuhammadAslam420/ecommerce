<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attribute>
 */
class AttributeFactory extends Factory
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
            'product_id'=>$this->faker->numberBetween(1,20),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
            'color' => $this->faker->safeColorName,

        ];
    }
}
