<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        request()->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = request()->only('username', 'password');

        $user = Admin::where('username', request()->username)->first();
        if (!$user || !Hash::check(request()->password, $user->password)) {
            throw ValidationException::withMessages([
                'username' => ['Invalid credentials']
            ]);
        }


        return response()->json([
            'token' => $user->createToken("access_token")->plainTextToken,
            'user' => $user,
        ]);
    }
}
