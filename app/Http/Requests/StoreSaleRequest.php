<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('create', Sale::class);
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
            'email' => 'required|unique:sales',
            'phone_number' => 'required|unique:sales',
            'gender' => 'required',
            'dob' => 'required'
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
            'email.required' => 'Email is required',
            'email.unique' => 'Email is already used',
            'phone_number.required' => 'Phone no is required',
            'phone_number.unique' => 'Phone no is already taken',
            'gender.required' => 'Gender is required',
            'dob.required' => 'Date of Birth is required',
        ];
    }
}
