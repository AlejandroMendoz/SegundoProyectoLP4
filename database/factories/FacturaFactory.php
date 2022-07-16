<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numerofactura'=> $this->faker->numberBetween(20,100),
            'fecha' => $this->faker->date(),
            'numerocliente'=> $this->faker->numberBetween(20,100),
           'numerovendedor'=> $this->faker->numberBetween(29,100)
        ];
    }
}
