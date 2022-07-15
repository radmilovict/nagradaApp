<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesma extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazivPesme', 
        'nazivAlbuma', 
        'zanrPesme'
    ];

    public function zanrPesme(){
        return $this->belongsTo(Zanr::class);
    }
}
