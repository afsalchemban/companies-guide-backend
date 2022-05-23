<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->email === $this->company->email && $this->user()->can('update', Company::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'business_name' => 'required',
            'email' => 'required|exists:companies,email',
            'phone_number' => 'required',
            'landline_number' => 'required',
            'trade_license_number' => 'required',
            'company_activity_id' => 'required',
            'legal_status' => 'required',
            'issued_by' => 'required',
            'website' => 'required',
            'country_id' => 'required|integer',
            'city_id' => 'required|integer',
            'area_id' => 'required|integer',
            'person_in_charge_name' => 'required',
            'person_in_charge_designation' => 'required',
            'person_in_charge_email' => 'required',
            'person_in_charge_mobile' => 'required',
            'person_in_charge_country' => 'required',
            'logo_image' => 'nullable|image'            
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
            'business_name.required' => 'Business name is required',
            'email.required' => 'Email is required',
            'email.exists' => 'Email is not existed',
            'phone_number.required' => 'Phone no is required',
            'landline_number.required' => 'Landline no is required',
            'trade_license_number.required' => 'Trade License no is required',
            'legal_status.required' => 'Legal status is required',
            'issued_by.required' => 'Issued By is required',
            'website.required' => 'Website is required',
            'country_id.required' => 'Country should select',
            'city_id.required' => 'City should select',
            'area_id.required' => 'Area should select',
            'person_in_charge_name.required' => 'Person in charge name is required',
            'person_in_charge_designation.required' => 'Person in charge designation is required',
            'person_in_charge_email.required' => 'Person in charge email is required',
            'person_in_charge_mobile.required' => 'Person in charge mobile is required',
            'person_in_charge_country.required' => 'Person in charge country is required',
            'logo_image.image' => 'File should be an image',
        ];
    }
}
