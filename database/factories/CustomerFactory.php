<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'telefono' => $this->faker->unique()->e164PhoneNumber(),
            'direccion' => $this->faker->address(),
            'correo' => $this->faker->unique()->safeEmail(),
            'status' => $this->faker->randomElement([1, 0]),
        ];
    }
}
