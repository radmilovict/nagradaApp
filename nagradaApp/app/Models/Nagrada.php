<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nagrada extends Model
{
    use HasFactory;

    protected $fillable = [
        'nominovaniIzvodjac',
        'kategorijaNominacije'
    ];

    public function nominovaniIzvodjac(){
        return $this->belongsTo(Izvodjac::class);
    }
    public function kategorijaNagrade(){
        return $this->belongsTo(Kategorija::class);
    }
}
