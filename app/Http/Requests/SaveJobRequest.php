<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveJobRequest extends FormRequest
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
            'title' => 'string',
            'description' => 'string',
            'company_name' => 'string',
            'address' => 'string|nullable',
            'deadline' => 'string',
            'application_mode' => 'string',
            'salary' => 'string',
            'link' => 'string|nullable',
        ];
    }
}
