<?php

namespace Database\Factories;

use App\Models\Izvodjac;
use App\Models\Kategorija;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nagrada>
 */
class NagradaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nominovaniIzvodjac'=>Izvodjac::find(random_int(1,Izvodjac::count())),
            'kategorijaNominacije'=>Kategorija::find(random_int(1,Kategorija::count()))
        ];
    }
}
