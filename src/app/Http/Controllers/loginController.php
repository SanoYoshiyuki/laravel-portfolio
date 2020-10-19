<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{

    public function __construct(Request $request)
    {
        $this->middleware('guest');
    }

    public function index ()
    {
        return view('login');
    }

    public function auth (Request $request)
    {
        $user = $request->input('user');
        $password = $request->input('password');

        if (User::where('user', '=', $user)->exists()) {
            session(['user' => $user]);
            return redirect('/home');
        } else {
            return redirect('login');
        }
    }
}
