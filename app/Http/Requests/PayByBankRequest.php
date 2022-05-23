<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;

class PayByBankRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('pay', Company::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'amount' => 'required',
            'reference_number' => 'required',
            'discount_percentage' => 'required',
            'discount_amount' => 'required',
            'bank_name' => 'required'
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
            'amount.required' => 'Amount is required',
            'reference_number.required' => 'Reference no is required',
            'discount_percentage.required' => 'Discount percentage is required',
            'discount_amount.required' => 'Discount amount is required',
            'bank_name.required' => 'Bank name is required'
        ];
    }
}
