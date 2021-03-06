<?php

namespace App\Http\Requests\Recrut;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'department_id' => 'required|exists:departments,id',
            'pathCV' => 'required|file',
            'pathDoc' => 'nullable|file',
            'info' => 'string|nullable',
        ];
    }
}
