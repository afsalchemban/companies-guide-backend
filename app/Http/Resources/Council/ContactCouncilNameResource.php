<?php

namespace App\Http\Resources\Council;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactCouncilNameResource extends JsonResource
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
            'name' => $this->council_name,
        ];
    }
}
