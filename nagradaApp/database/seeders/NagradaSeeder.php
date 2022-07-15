<?php

namespace Database\Seeders;

use App\Models\Nagrada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NagradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   Nagrada::factory(4)->create();
 
    }
}
