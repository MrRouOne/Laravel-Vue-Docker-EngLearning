<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserLoginResource extends JsonResource
{
    protected $token;

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function toArray($request)
    {
        return [
            'message' => "Successful authorization!",
            'data' => [
                'access_token' => $this->token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60,
                'user' => auth()->user()
            ]
        ];
    }
}
