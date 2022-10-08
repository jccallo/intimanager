<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->sentence(),
            'tipo_carrera' => $this->faker->randomElement([0, 1, 2]),
            'status' => $this->faker->randomElement([1, 0]),
        ];
    }
}
