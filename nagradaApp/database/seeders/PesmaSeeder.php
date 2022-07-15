<?php

namespace Database\Seeders;

use App\Models\Pesma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   Pesma::factory(5)->create();
        
    }
}
