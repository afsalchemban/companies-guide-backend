<?php

namespace App\Http\Requests;

use App\Models\CouncilMember;
use Illuminate\Foundation\Http\FormRequest;

class StoreCouncilMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $council = $this->route('council');
        return $council && $this->user()->can('addMember', $council);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'dob' => 'required',
            'email' => 'required|unique:council_members',
            'nationality' => 'required',
            'mobile' => 'required',
            'designation' => 'required',
            'country_id' => 'required|integer',
            'city_id' => 'required|integer',
            'area_id' => 'required|integer',
            'profile_image_file' => 'nullable|image',            
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
            'name.required' => 'Name is required',
            'dob.required' => 'Date of Birth is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email is already used',
            'nationality.required' => 'Nationality is required',
            'mobile.required' => 'Mobile no is required',
            'designation.required' => 'Designation is required',
            'country_id.required' => 'Country should select',
            'city_id.required' => 'City should select',
            'area_id.required' => 'Area should select',
            'profile_image_file.image' => 'File should be an image'
        ];
    }
}
