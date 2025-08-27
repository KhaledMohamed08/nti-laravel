<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:220',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($data)) {

            // $user = User::where('email', $data['email'])->first();
            // Auth::login($user);

            $request->session()->regenerate();

            return redirect()->route('products.index');
        }

        return redirect()->back()->withErrors(['fail' => 'Invalid Data']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        return redirect()->route('products.index');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:220',
            'email' => 'required|email|max:100',
            'phone' => 'string|max:20',
            'password' => 'required|confirmed|min:8|max:20'
        ]);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        Auth::login($user);

        return redirect()->route('products.index');
    }
}
