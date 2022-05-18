<?php

namespace App\Http\Resources\Council\Public;

use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CouncilEventPublicResource extends JsonResource
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
            'name' => $this->name,
            'location' => $this->location,
            'link' => $this->link,
            'event_date' => $this->event_date,
            'event_logo' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','event')->first();
            }))
        ];
    }
}
