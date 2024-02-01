<?php

namespace App\Http\Requests\Personal\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'required|string',
//            'user_image'=>'required|file',
            'full_name'=>'required|string',
            'mobile'=>'required|string',
            'address'=>'required|string',
        ];
    }
}
