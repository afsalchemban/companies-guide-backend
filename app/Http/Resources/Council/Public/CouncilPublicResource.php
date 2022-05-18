<?php

namespace App\Http\Resources\Council\Public;

use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CouncilPublicResource extends JsonResource
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
            'id' => $this->id,
            'council_name' => $this->council_name,
            'email' => $this->email,
            'mobile_number' => $this->mobile_number,
            'landline_number' => $this->landline_number,
            'logo' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','logo')->first();
            })),
            'cover' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','cover')->first();
            })),
            'country' => $this->whenLoaded('country'),
            'city' => $this->whenLoaded('city'),
            'area' => $this->whenLoaded('area'),
        ];
    }
}
