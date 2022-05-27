<?php

namespace App\Http\Resources;

use App\Http\Resources\Company\Public\ActivityPublicResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyReportResource extends JsonResource
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
            'email' => $this->email,
            'business_name' => $this->business_name,
            'phone_number' => $this->phone_number,
            'active_package' => new PackageResource($this->whenLoaded('activePackage', function () {
                return $this->activePackage->first();
            })),
            'expired_package' => new PackageResource($this->whenLoaded('expiredPackages', function () {
                return $this->expiredPackages->sortByDesc('subscriptions.end_date')->first();
            })),
            'logo' => new ImageResource($this->whenLoaded('images',function(){
                return $this->images->where('type','logo')->first();
            })),
            'activity' => ActivityPublicResource::collection($this->whenLoaded('companyActivity')),
            'added_by' => $this->whenLoaded('companiable'),
            'created_at' => $this->created_at->format('Y-m-d'),
        ];
    }
}
