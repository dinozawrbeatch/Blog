<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,' . $this->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'В имени должны быть только буквы и цифры',
            'name.required' => 'Это поле необходимо для заполнения',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.email' => 'Некорректный формат email',
            'email.unique' => 'Такой email уже зарегистрирован',
            'role.required' => 'Необходимо выбрать роль',
            'role.integer' => 'Должно быть числом',
        ];
    }
}
