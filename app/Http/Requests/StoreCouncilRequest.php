<?php

namespace App\Http\Requests;

use App\Models\Council;
use Illuminate\Foundation\Http\FormRequest;

class StoreCouncilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('create', Council::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'council_name' => 'required',
            'email' => 'required|unique:councils',
            'mobile_number' => 'required|unique:councils',
            'landline_number' => 'required',
            'country_id' => 'required|integer',
            'city_id' => 'required|integer',
            'area_id' => 'required|integer',
            'person_in_charge_name' => 'required',
            'person_in_charge_designation' => 'required',
            'person_in_charge_email' => 'required',
            'person_in_charge_mobile' => 'required',
            'person_in_charge_country' => 'required',
            'cover_image_file' => 'nullable|image',          
            'logo_file' => 'nullable|image'       
        ];
    }
}
