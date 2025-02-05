<?php

namespace App\Http\Requests\Api\V1\Admin\SubjectManagement;

use Illuminate\Foundation\Http\FormRequest;

class UpSerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ['required', 'string', 'unique:subjects,name'],
            "code" => ['required', 'string', 'unique:subjects,code'],
        ];
    }
}
