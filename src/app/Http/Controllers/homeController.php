<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function __construct()
    {
        $this->middleware('verify');
    }

    public function index () {
        return view('welcome');
    }

    public function logout (Request $request)
    {
        session()->flush();
        return redirect('/login');
    }
}
