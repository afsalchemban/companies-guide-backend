<?php

namespace App\Http\Resources\Reports\SingleSale;

use Illuminate\Http\Resources\Json\JsonResource;

class SingleSaleReportResource extends JsonResource
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
            'phone_number' => $this->phone_number,
            'total_income' => $this->orders_sum_net_total,
            'companies' => CompanyResource::collection($this->whenLoaded('companies'))
        ];
    }
}
