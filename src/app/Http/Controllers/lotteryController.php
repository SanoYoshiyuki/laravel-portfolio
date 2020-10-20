<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lotteryController extends Controller
{
    public function __construct()
    {
        $this->middleware('verify');
    }

    public function index()
    {
        return view('lottery');
    }
}
