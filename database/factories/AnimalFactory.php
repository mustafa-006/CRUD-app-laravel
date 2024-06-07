<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Animal;

class AnimalFactory extends Factory
{
    protected $model = Animal::class;

    public function definition()
    {
        return [
            "type" => $this->faker->word(),
            "name" => $this->faker->word(),
            "age" => $this->faker->numberBetween(1, 10),
            "price" => $this->faker->numberBetween(1, 6)
        ];
    }
}
