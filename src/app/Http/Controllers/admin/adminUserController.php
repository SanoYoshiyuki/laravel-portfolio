<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUser;

class adminUserController extends Controller
{
    public function index ()
    {
        return view('admin/home');
    }

    public function login ()
    {
        return view('admin/login');
    }

    public function auth (Request $request)
    {
        session(['admin_user' => 'aaa']);
        return redirect('admin');
    }

    public function logout (Request $request)
    {
        session()->flush();
        return redirect('admin/login');
    }
}
