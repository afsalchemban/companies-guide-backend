<?php

namespace App\Http\Resources\Council\Dashboard;

use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CouncilDashboardResource extends JsonResource
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
            'companies_count' => $this->companies_count,
            'members_count' => $this->members_count,
            'logo' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','logo')->first();
            }))
        ];
    }
}
