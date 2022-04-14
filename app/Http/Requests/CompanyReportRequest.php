<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isSale()||$this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sale_id' => 'nullable|exists:sales,id',
            'package_id' => 'nullable|exists:packages,id',
            'company_activity_id' => 'nullable|exists:company_activities,id',
        ];
    }
}
