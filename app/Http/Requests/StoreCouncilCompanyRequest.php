<?php

namespace App\Http\Requests;

use App\Models\CouncilCompany;
use Illuminate\Foundation\Http\FormRequest;

class StoreCouncilCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $council = $this->route('council');
        return $council && $this->user()->can('addCompany', $council);
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
            'email' => 'required|unique:companies',
            'phone_number' => 'required|unique:companies',
            'landline_number' => 'required|unique:companies',
            'trade_license_number' => 'required',
            'company_activity_id' => 'required',
            'legal_status' => 'required',
            'issued_by' => 'required',
            'country_id' => 'required|integer',
            'city_id' => 'required|integer',
            'area_id' => 'required|integer',
            'person_in_charge_name' => 'required',
            'person_in_charge_designation' => 'required',
            'person_in_charge_email' => 'required',
            'person_in_charge_mobile' => 'required',
            'person_in_charge_country' => 'required',           
            'logo_file' => 'nullable|image',           
        ];
    }
}
