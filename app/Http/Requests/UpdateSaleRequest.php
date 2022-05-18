<?php

namespace App\Http\Requests;

use App\Models\Sale;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSaleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->email === $this->sale->email && $this->user()->can('update', Sale::class);
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
            'email' => 'required|exists:sales,email',
            'phone_number' => 'required|unique:sales',
            'gender' => 'required',
            'dob' => 'required',
            'profile_image' => 'nullable|image',
        ];
    }
}
