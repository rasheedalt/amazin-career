<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobRequest extends FormRequest
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
            'company_name' => 'required',
            'company_registration_no' => 'required',
            'job.address' => 'required',
            'job.title' => 'required',
            'job.description' => 'required',
            'job.application_mode' => 'required',
            'job.salary' => 'required',
            'job.deadline' => 'required',
        ];
    }
}
