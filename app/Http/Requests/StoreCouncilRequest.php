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
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'council_name.required' => 'Council name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email is already used',
            'mobile_number.required' => 'Mobile no is required',
            'mobile_number.unique' => 'Mobile no is already taken',
            'landline_number.required' => 'Landline no is required',
            'person_in_charge_name.required' => 'Person in charge name is required',
            'person_in_charge_designation.required' => 'Person in charge designation is required',
            'person_in_charge_email.required' => 'Person in charge email is required',
            'person_in_charge_mobile.required' => 'Person in charge mobile is required',
            'person_in_charge_country.required' => 'Person in charge country is required',
            'cover_image_file.image' => 'File should be an image',
            'logo_file.image' => 'File should be an image'
        ];
    }
}
