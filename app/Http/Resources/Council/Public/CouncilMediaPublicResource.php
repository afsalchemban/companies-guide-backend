<?php

namespace App\Http\Resources\Council\Public;

use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CouncilMediaPublicResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'media' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','media')->first();
            }))
        ];
    }
}
