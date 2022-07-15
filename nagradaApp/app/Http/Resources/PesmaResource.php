<?php

namespace App\Http\Resources;

use App\Models\Zanr;
use Illuminate\Http\Resources\Json\JsonResource;

class PesmaResource extends JsonResource
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
            'nazivPesme'=>$this->resource->nazivPesme,
            'nazivAlbuma'=>$this->resource->nazivAlbuma,
            'zanrPesme'=>new ZanrResource(Zanr::find($this->resource->zanrPesme))
        ];
    }
}
