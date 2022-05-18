<?php

namespace App\Http\Resources\Council\Public;

use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CouncilCompanyPublicResource extends JsonResource
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
            'business_name' => $this->business_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'landline_number' => $this->landline_number,
            'trade_license_number' => $this->trade_license_number,
            'logo' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','logo')->first();
            }))
        ];
    }
}
