<?php

namespace App\Http\Resources\Frontend;

use Illuminate\Http\Resources\Json\JsonResource;

class FrontendActiveCompanyResource extends JsonResource
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
            'phone_number' => $this->phone_number,
            'activity' => $this->whenLoaded('companyActivity'),
            'added_by' => $this->whenLoaded('sale'),
            'package' => $this->whenLoaded('activePackage'),
        ];
    }
}
