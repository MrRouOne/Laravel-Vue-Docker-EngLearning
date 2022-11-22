<?php

namespace App\Helpers;

class HelperOutputData
{
    public static function globalOutput($success = [], $errors = [], int $code = 200)
    {
        return $errors ? response()->json(["data" => [], "errors" => $errors], $code)
            : response()->json(["data" => $success, "errors" => []], $code);
    }
}
