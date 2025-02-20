<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(LoginRequest $request) {

        $credentials = $request->all();

        if(!User::query()->where('email', $credentials['email'])->exists()) {

            return $this->sendError('Login gagal!', 401, 'Akun belum terdaftar!');

        } elseif(Auth::attempt($credentials)) {
            $user = auth()->user();
            $token = $user->createToken('auth_token')->plainTextToken;
            $data = [
                'name' => $user->name,
                'role' => $user->role,
                'token' => $token
            ];

            return $this->sendResponse('Login berhasil!', 200, $data);
        } else {
            return $this->sendError('Login gagal!', 401, 'Email atau password salah!');
        }
    }

    public function registerUser(RegisterRequest $registerRequest) {
        $data = $registerRequest->getData();
        User::create($data);

        return $this->sendResponse('Register berhasil!', 201);
    }

    public function logout() {
        auth()->user()->currentAccessToken()->delete();

        return $this->sendResponse('Logout berhasil!', 200);
    }
}