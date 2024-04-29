<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(),
            // 'jdl_link' => $this->faker->sentence(4),
            // 'link' => $this->faker->url(),
            'theme_id' => mt_rand(1,24)
        ];
    }
}
