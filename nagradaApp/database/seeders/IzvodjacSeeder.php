<?php

namespace Database\Seeders;

use App\Models\Izvodjac;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IzvodjacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   Izvodjac::factory(3)->create();
       
    }
}
