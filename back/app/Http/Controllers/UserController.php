<?php

namespace App\Http\Controllers;

use App\Exceptions\BaseException;
use App\Http\Requests\User\LoginRequest;
use App\Http\Resources\UserLoginResource;
use App\Http\Resources\UserLogoutResource;
use App\Models\User;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Resources\UserRegisterResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function register(RegisterRequest $request): UserRegisterResource
    {
        $user = User::create([
            'id' => Str::uuid(),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return new UserRegisterResource($user);
    }

    public function login(LoginRequest $request): UserLoginResource
    {
        if (!$token = auth()->attempt($request->validated())) {
            throw new BaseException(401, 'Incorrect email or password');
        }

        return (new UserLoginResource($request))->setToken($token);
    }

    public function logout(Request $request): UserLogoutResource
    {
        auth()->logout();
        return new UserLogoutResource($request);
    }

}
