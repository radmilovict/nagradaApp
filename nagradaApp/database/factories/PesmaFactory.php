<?php

namespace Database\Factories;

use App\Models\Zanr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pesma>
 */
class PesmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nazivPesme'=>$this->faker->randomElement($array = array('Bad Romance','Shallow','Umbrella','The Monster','Crazy in Love')),
            'nazivAlbuma'=>$this->faker->randomElement($array = array('Dengerously in Love','Good Girl Gone Bad','Unapologetic','Bad Romance')),
            'zanrPesme'=>Zanr::find(random_int(1,Zanr::count()))
        ];
    }
}
