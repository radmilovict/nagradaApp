<?php

namespace Database\Factories;

use App\Models\Pesma;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Izvodjac>
 */
class IzvodjacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nazivIzvodjaca'=>$this->faker->randomElement($array = array('Lady Gaga','Rihanna','Beyonce')),
            'nominovanaPesma'=>Pesma::find(random_int(1,Pesma::count())),
            'brojGremija'=>$this->faker->numberBetween($min=0,$max=10)
        ];
    }
}
