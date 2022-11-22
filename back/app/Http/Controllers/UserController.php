<?php

namespace App\Http\Controllers;

use App\Helpers\HelperValidator;
use App\Helpers\HelperOutputData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $validator = new HelperValidator();
        $validator->validate($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        return HelperOutputData::globalOutput("Good!", $validator->errors, $validator->code ?? 200);
    }

    public function register2(Request $request)
    {
        return $request;
    }
}
