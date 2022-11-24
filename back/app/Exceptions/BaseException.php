<?php

namespace App\Exceptions;

use Illuminate\Http\Exceptions\HttpResponseException;

class BaseException extends HttpResponseException
{
    public function __construct($code = 400, $message = 'Validation error', $errors = [])
    {
        $data = [
            'error' => [
                'code' => $code,
                'message' => $message,
                'errors' => $errors,
            ]
        ];

        parent::__construct(response()->json($data)->setStatusCode($code));
    }
}
