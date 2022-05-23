<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCouncilEventsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $council = $this->route('council');
        return $council && $this->user()->can('addEvent', $council);
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
            'location' => 'required',
            'event_date' => 'required',
            'link' => 'required',
            'image' => 'nullable|image'
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
            'location.required' => 'Location is required',
            'event_date.required' => 'Event date is required',
            'link.required' => 'Link  is required',
            'image.image' => 'File should be an image',
        ];
    }
}
