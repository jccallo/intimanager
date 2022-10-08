<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

            'dni' => $this->faker->unique()->randomNumber(8, true),
            'fecha_nacimiento' => $this->faker->date(),
            'talla' => $this->faker->randomFloat(2, 0, 2),
            'talla_zapato' => $this->faker->randomNumber(2, true),
            'talla_overol' => $this->faker->word(),
            'peso' => $this->faker->randomFloat(2, 1, 3),
            'direccion' => $this->faker->address(),
            'observacion' => $this->faker->sentence(),
            'sueldo_dia' => $this->faker->randomFloat(2, 1, 200),
            'sueldo_mes' => $this->faker->randomFloat(2, 1, 3000),
            'foto_firma' => $this->faker->ean13(),
            'foto_perfil' => $this->faker->ean13(),
            'foto_huella' => $this->faker->ean13(),
            'tipo_trabajador' => $this->faker->randomElement(['externo', 'permanente']),
            'place_id' => $this->faker->randomElement([1, 2, 3, 4, 5]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
