<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
