<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'Nombre' => $this->faker->name,
          'dni'=> $this->faker->numberBetween(8,100),
          'Apellido'=> $this->faker->lastname,
          'Correo'=> $this->faker->email,
          'Telefono'=> $this->faker->phonenumber()
        ];
    }
}
