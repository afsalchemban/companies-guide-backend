<?php

namespace App\Http\Resources\Company\Public;

use App\Http\Resources\Category\CategoryNameResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyProductResource extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'categories' => CategoryNameResource::collection($this->whenLoaded('categories'))
        ];
    }
}
