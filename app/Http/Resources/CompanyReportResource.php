<?php

namespace App\Http\Resources;

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
            'business_name' => $this->business_name,
            'phone_number' => $this->phone_number,
            'package' => $this->package,
            'activity' => $this->companyActivity,
            'added_by' => $this->sale,
            'created_at' => $this->created_at,
        ];
    }
}
