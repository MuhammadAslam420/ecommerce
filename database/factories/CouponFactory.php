<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'coupon_value' => $this->faker->randomFloat(2, 0, 100),
            'type' => $this->faker->randomElement(['fixed', 'percentage']),
            'cart_value' => $this->faker->randomFloat(2, 0, 5000),
            'status' => $this->faker->randomElement([0, 1]),
        ];

    }
}
