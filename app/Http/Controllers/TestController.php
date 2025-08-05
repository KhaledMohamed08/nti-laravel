<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        // return 'hello from test controler';
        $users = User::all();
        // dd($users);

        return view('test', ['users' => $users]);
    }
}
