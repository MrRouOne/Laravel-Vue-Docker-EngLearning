<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Validator;

class HelperValidator
{
    public $errors = [];
    public ?int $code = null;

    public function validate(array $args = [], array $rules = [])
    {
        $validator = Validator::make($args, $rules);
        if ($validator->fails()) {
            $this->errors = $validator->errors();
            $this->code = 400;
            return;
        }
        return;
    }
}
