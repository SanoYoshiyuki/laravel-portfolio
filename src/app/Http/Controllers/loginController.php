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

        if (User::where('user', $user)->exists()) {

            $user_id = User::select('id')->where('user', $user)->get();
            session(['user_id' => $user_id[0]['id']]);

            logger($user_id[0]['id']);
            session(['user' => $user]);

            return redirect('/home');
        } else {
            return redirect('/login');
        }
    }
}
