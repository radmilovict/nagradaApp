<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izvodjac extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazivIzvodjaca', 
        'nominovanaPesma',
    ];

    public function nominovanaPesma(){
        return $this->belongsTo(Pesma::class);
    }
}
