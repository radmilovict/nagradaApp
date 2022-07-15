<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k1 = new Kategorija();
        $k1->nazivKategorije="Record Of The Year";
        $k1->save();

        $k2 = new Kategorija();
        $k2->nazivKategorije="Album Of The Year";
        $k2->save();

        $k3 = new Kategorija();
        $k3->nazivKategorije="Song Of The Year";
        $k3->save();

        $k4 = new Kategorija();
        $k4->nazivKategorije="Best New Artist";
        $k4->save();
    }
}
