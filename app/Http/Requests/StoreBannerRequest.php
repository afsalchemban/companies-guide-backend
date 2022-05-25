<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

class StoreBannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $company = Company::find($this->company_id);
        return $this->user()->can('addBanner', $company);
    }

    protected function failedAuthorization()
    {
        throw new AuthorizationException('You are not authorized / this company doesn\'t have full or profile package');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'banner' => 'required|image',
            'company_id' => 'required:exists:companies,id',
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
            'banner.required' => 'Banner Image is required',
            'banner.image' => 'File should be image',
            'company_id.required' => 'Company id is required',
            'company_id.exists' => 'Company not found',
        ];
    }
}
