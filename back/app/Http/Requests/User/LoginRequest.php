<?php

namespace App\Http\Requests\User;

use App\Exceptions\BaseException;
use App\Http\Requests\BaseRequest;

class LoginRequest extends BaseRequest
{

    public function rules()
    {
        return [
            'email' => ['required'],
            'password' => ['required'],
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
