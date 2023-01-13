<?php

namespace App\Http\Resources;

use App\Models\Frizer;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class MusterijaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $frizer = DB::table('frizers')->where('id', $this->resource->frizer_id)->first();

        return [
            'Ime:' => $this->ime,
            'Prezime:' => $this->prezime,
            'Broj telefona:' => $this->broj_telefona,
            'Frizer:' => new FrizerResource($frizer)
        ];
    }
}
