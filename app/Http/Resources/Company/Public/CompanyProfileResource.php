<?php

namespace App\Http\Resources\Company\Public;

use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyProfileResource extends JsonResource
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
            'business_name' => $this->business_name,
            'services' => $this->services,
            'website' => $this->website,
            'phone_number' => $this->phone_number,
            'aboutus' => $this->aboutus,
            'facebook_url' => $this->facebook_url,
            'youtube_url' => $this->youtube_url,
            'twitter_url' => $this->twitter_url,
            'profile_images' => ImageResource::collection($this->whenLoaded('images',function(){
                return $this->images->where('type','profile-page-image');
            })),
            'logo' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','logo')->first();
            })),
            'products' => CompanyProductResource::collection($this->whenLoaded('products'))
        ];
    }
}
