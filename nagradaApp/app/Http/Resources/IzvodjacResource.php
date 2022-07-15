<?php

namespace App\Http\Resources;

use App\Models\Pesma;
use Illuminate\Http\Resources\Json\JsonResource;

class IzvodjacResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'nazivIzvodjaca'=>$this->resource->nazivIzvodjaca,
            'nominovanaPesma'=>new PesmaResource(Pesma::find($this->resource->nominovanaPesma)),
            'brojGremija'=>$this->resource->brojGremija
        ];
    }
}
