<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function index () {
        return view('login');
    }

    public function Auth (Request $request)
    {

        $user = $request->input('user');
        $password = $request->input('password');

        logger($user);
        logger($password);

        if (User::where('user', '=', $user)->exists()) {
            return redirect('/');
        } else {
            return redirect('login');
        }
    }
}
