<?php

namespace App\Http\Requests\Admin\User;

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
            'email'=>'required|string|email|unique:users,email,' . $this->user_id,
            'role'=>'required|integer',
            'user_id'=>'required|integer|exists:users,id',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Это поле не может быть пустым',
            'name.string' => 'Это поле должно быть строчного формата',
            'email.string' => 'Это поле должно быть строчного формата',
            'email.required' => 'Это поле не может быть пустым',
            'email.email' => 'Это поле должно содержать e-mail',
            'email.unique' => 'Пользователь с таким e-mail уже существует',
            'role.required' => 'Это поле не может быть пустым',
            'role.string' => 'Это поле должно быть строчного формата',
        ];
    }
}
