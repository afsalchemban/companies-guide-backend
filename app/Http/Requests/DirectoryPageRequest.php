<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirectoryPageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'city_id' => 'nullable|exists:cities,id',
            'company_activity_id' => 'nullable|exists:company_activities,id',
            'company_id' => 'nullable|exists:companies,id',
        ];
    }
}
