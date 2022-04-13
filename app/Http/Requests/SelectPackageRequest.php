<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

class SelectPackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $company = Company::find($this->company_id);
        return $this->user()->can('changePackage', $company);
    }

    protected function failedAuthorization()
    {
        throw new AuthorizationException('You are not authorized');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_id' => 'required|exists:companies,id',
            'package_id' => 'required|exists:packages,id',
        ];
    }
}
