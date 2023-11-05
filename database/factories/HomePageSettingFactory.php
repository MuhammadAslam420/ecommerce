<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomePageSetting>
 */
class HomePageSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'footer_logo' => $this->faker->imageUrl(100, 100),
            'web_logo' => $this->faker->imageUrl(100, 100),
            'mobile_logo' => $this->faker->imageUrl(100, 100),
            'm_footer_logo' => $this->faker->imageUrl(100, 100),
            'hotline' => $this->faker->phoneNumber,
            'mobile' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'map' => $this->faker->url,
            'facebook' => $this->faker->url,
            'youtube' => $this->faker->url,
            'twitter' => $this->faker->url,
            'instagram' => $this->faker->url,
            'pinterest' => $this->faker->url,
            'timing' => $this->faker->sentence,
            'android_app' => $this->faker->url,
            'ios_app' => $this->faker->url,
            'name' => $this->faker->name,
        ];
    }
}
