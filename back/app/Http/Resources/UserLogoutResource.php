<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserLogoutResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'message' => "User successfully signed out!",
        ];
    }
}
