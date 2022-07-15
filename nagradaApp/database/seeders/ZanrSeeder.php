<?php

namespace Database\Seeders;

use App\Models\Zanr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZanrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $z1 = new Zanr();
        $z1->nazivZanra='DANCE';
        $z1->save();

        $z2 = new Zanr();
        $z2->nazivZanra='COUNTRY';
        $z2->save();

        $z3 = new Zanr();
        $z3->nazivZanra='BLUES';
        $z3->save();

        $z4 = new Zanr();
        $z4->nazivZanra='RAP';
        $z4->save();

        $z5 = new Zanr();
        $z5->nazivZanra='FILM&TV';
        $z5->save();

        $z6 = new Zanr();
        $z6->nazivZanra='DISCO';
        $z6->save();

        $z7 = new Zanr();
        $z7->nazivZanra='ROCK';
        $z7->save();

        $z8 = new Zanr();
        $z8->nazivZanra='POP';
        $z8->save();
    }
}
