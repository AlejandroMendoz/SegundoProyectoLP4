<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VendedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'apellido' => $this->faker->lastname,
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->phonenumber(),
            'email' => $this->faker->email
        ];
    }
}
