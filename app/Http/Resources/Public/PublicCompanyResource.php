<?php

namespace App\Http\Resources\Public;

use App\Http\Resources\Company\Public\ActivityPublicResource;
use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PublicCompanyResource extends JsonResource
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
            'name' => $this->business_name,
            'email' => $this->email,
            'website' => $this->website,
            'phone_number' => $this->phone_number,
            'logo' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','logo')->first();
            })),
            'activity' => ActivityPublicResource::collection($this->whenLoaded('companyActivity')),
            'added_by' => $this->whenLoaded('sale'),
            'city' => $this->whenLoaded('city'),
            'area' => $this->whenLoaded('area'),
            'activePackage' => $this->whenLoaded('activePackage')
        ];
    }
}
