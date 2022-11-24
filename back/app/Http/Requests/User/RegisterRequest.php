<?php

namespace App\Http\Requests\User;

use App\Exceptions\BaseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    protected function failedValidation(Validator $validator)
    {
        throw new BaseException(errors: $validator->errors());
    }

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:32|same:password_confirmation|regex:/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[\d])\S*$/',
            'password_confirmation' => 'required|min:8|max:32|regex:/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[\d])\S*$/',
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => 'the password must contain both numbers and letters',
            'password_confirmation.regex' => 'the password confirmation must contain both numbers and letters',
        ];
    }
}
