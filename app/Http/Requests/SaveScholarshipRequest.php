<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveScholarshipRequest extends FormRequest
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
            'title' => 'bail|required|string',
            'description' => 'bail|required|string',
            'application_mode' => 'bail|required|string',
            'link' => 'bail|nullable|string',
            'is_active' => 'string',
            'deadline' => 'bail|string|max:60',
            'requirements' => 'bail|required|string'
        ];
    }
}
