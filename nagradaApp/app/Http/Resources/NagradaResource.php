<?php

namespace App\Http\Resources;

use App\Models\Izvodjac;
use App\Models\Kategorija;
use Illuminate\Http\Resources\Json\JsonResource;

class NagradaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->resource->id,
            'nominovaniIzvodjac'=>new IzvodjacResource(Izvodjac::find($this->resource->nominovaniIzvodjac)),
            'kategorijaNominacije'=>new KategorijaResource(Kategorija::find($this->resource->kategorijaNominacije))
        ];
    }
}
