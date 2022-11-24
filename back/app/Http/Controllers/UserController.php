<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Resources\UserRegisterResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'id' => Str::uuid(),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return new UserRegisterResource($user);
    }
}
