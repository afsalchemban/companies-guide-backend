<?php

namespace App\Http\Requests;

use App\Models\Company;
use App\Services\UserSwitchingService;
use Illuminate\Foundation\Http\FormRequest;

class SelectPackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(UserSwitchingService $userSwitch)
    {
        $company = Company::find($this->id);
        return $this->user()->can('changePackage', $company);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:companies',
            'package_id' => 'required|exists:packages,id',
        ];
    }
}
