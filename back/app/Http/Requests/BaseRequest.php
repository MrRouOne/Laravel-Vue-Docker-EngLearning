<?php

namespace App\Http\Requests;

use App\Exceptions\BaseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{

    protected function failedValidation(Validator $validator)
    {
        throw new BaseException(errors: $validator->errors());
    }

    public function authorize()
    {
        return true;
    }

}