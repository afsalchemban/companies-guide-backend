<?php

namespace App\Http\Resources\Council\Public;

use App\Http\Resources\ImageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CouncilMemberPublicResource extends JsonResource
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
            'email' => $this->email,
            'dob' => $this->dob,
            'mobile' => $this->mobile,
            'designation' => $this->designation,
            'website' => $this->website,
            'profile' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','profile')->first();
            }))
        ];
    }
}
