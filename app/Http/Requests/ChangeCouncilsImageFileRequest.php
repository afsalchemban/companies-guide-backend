<?php

namespace App\Http\Requests;

use App\Models\Council;
use Illuminate\Foundation\Http\FormRequest;

class ChangeCouncilsImageFileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $council = $this->route('council');
        return $council && $this->user()->can('changeImageFile', $council);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [          
            'file' => 'nullable|image',           
        ];
    }
}
