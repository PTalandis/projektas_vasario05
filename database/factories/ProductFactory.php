<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->title(),
            'description'=> $this->faker->sentence(5),
            'price'=> $this->faker->randomFloat(2, 0, 100),
            'category_id'=> $this->faker->numberBetween(1, 3),
            'image_url'=> $this->faker->imageUrl()
        ];
    }
}
