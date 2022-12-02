<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class RegisterRequest extends BaseRequest
{

    public function rules()
    {
        return [
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'max:32', 'regex:/^(?=.*\d)(?=.*[a-z])[0-9a-z]+$/i'],
            'password_confirmation' => ['required', 'same:password'],
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => 'the password must contain both numbers and latin letters',
            'password_confirmation.regex' => 'the password confirmation must contain both numbers and letters',
        ];
    }
}
