<?php

namespace Database\Factories;

use App\Models\Animal;
use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodConsumFactory extends Factory
{

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            // TODO: regarder une meilleure query pour animal_id
            'animal_id' => Animal::query()->where('id', 1)->first()->id,
            'food_id' => Food::query()->random()->id,
            'quantity' => $this->faker->numberBetween(100, 1000),
            'unit' => $this->faker->randomElement(['g', 'l']),
            'user_id' => User::query()->where('role', 'employee')->inRandomOrder()->first()->id
        ];
    }
}
