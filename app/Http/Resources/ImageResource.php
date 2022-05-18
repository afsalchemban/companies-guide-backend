<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'desktop_image' => $this->desktop_path,
            'mobile_image' => $this->mobile_path,
            'thumbnail_image' => $this->thumbnail_path,
        ];
    }
}
