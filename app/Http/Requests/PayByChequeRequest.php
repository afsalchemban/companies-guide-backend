<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;

class PayByChequeRequest extends FormRequest
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
            'bank_name' => 'required',
            'cheque_number' => 'required',
            'discount_percentage' => 'required',
            'discount_amount' => 'required',
            'cheque_image' => 'required|image'
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
            'discount_percentage.required' => 'Discount percentage is required',
            'discount_amount.required' => 'Discount amount is required',
            'bank_name.required' => 'Bank name is required',
            'cheque_number.required' => 'Cheque no is required',
            'cheque_image.required' => 'Cheque Image is required',
            'cheque_image.image' => 'File should be an image',
        ];
    }
}
