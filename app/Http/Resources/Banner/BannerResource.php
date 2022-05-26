<?php

namespace App\Http\Resources\Banner;

use App\Http\Resources\Company\Dashboard\CompanyNameResource;
use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BannerResource extends JsonResource
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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'status' => $this->status,
            'image' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','banner')->first();
            })),
            'company' => new CompanyNameResource($this->whenLoaded('company')),
        ];
    }
}
