<?php

namespace App\Http\Resources\Banner\Public;

use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BannerPublicResource extends JsonResource
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
            'image' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','banner')->first();
            }))
        ];
    }
}
