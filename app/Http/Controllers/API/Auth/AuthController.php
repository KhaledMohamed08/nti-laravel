<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:220',
            'password' => 'required|string|min:8|max:220'
        ]);

        if (!Auth::attempt($data)) {
            return response()->json([
                'message' => 'Invalid Data',
            ], 401);
        }

        $user = User::where('email', $data['email'])->first();

        $token = $user->createToken('user-token')->plainTextToken;

        return response()->json([
            'message' => 'logged in successfully',
            'token' => $token,
        ]);
    }

    public function logout(Request $request)
    {
        $request->user('sanctum')->tokens()->delete();

        return response()->json([
            'message' => 'Logged out Successfully',
        ]);
    }
}
