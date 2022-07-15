<?php

namespace Database\Seeders;

use App\Models\Izvodjac;
use App\Models\Kategorija;
use App\Models\Nagrada;
use App\Models\Pesma;
use App\Models\User;
use App\Models\Zanr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Nagrada::truncate();
        Izvodjac::truncate();
        Pesma::truncate();
        Kategorija::truncate();
        Zanr::truncate();
        
        User::factory(5)->create();

        $k = new KategorijaSeeder();
        $k->run();

        $n = new NagradaSeeder();
        $n->run();

        $p = new PesmaSeeder();
        $p->run();

        $i = new IzvodjacSeeder();
        $i->run();

        $z = new ZanrSeeder();
        $z->run();
    }
}
