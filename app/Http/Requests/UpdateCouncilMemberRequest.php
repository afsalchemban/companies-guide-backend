<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCouncilMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $council = $this->route('council');
        return $council && $this->user()->can('updateMember', $council);
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
            'email' => 'required',
            'nationality' => 'required',
            'mobile' => 'required',
            'designation' => 'required',
            'country_id' => 'required|integer',
            'city_id' => 'required|integer',
            'area_id' => 'required|integer',         
        ];
    }
}
