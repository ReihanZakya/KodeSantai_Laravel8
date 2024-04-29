<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul_link' => $this->faker->sentence(4),
            'link' => $this->faker->url(),
            'material_id' => mt_rand(1,50)
        ];
    }
}
