<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'legal_status' => $this->legal_status,
            'issued_by' => $this->issued_by,
            'person_in_charge_name' => $this->person_in_charge_name,
            'person_in_charge_designation' => $this->person_in_charge_designation,
            'person_in_charge_email' => $this->person_in_charge_email,
            'person_in_charge_mobile' => $this->person_in_charge_mobile,
            'person_in_charge_country' => $this->person_in_charge_country,
            'activity' => $this->companyActivity,
            'country' => $this->country,
            'area' => $this->area,
            'city' => $this->city,
            'package' => $this->packages,
        ];
    }
}
