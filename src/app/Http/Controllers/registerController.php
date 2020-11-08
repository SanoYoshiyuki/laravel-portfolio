<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function infomation()
    {
        return view('registerInfomation');
    }

    public function register(Request $request)
    {
        $UserTable = new User;
        $TicketTable = new Ticket;
        if ($UserTable::where('user', $request->input('user'))->orWhere('email', $request->input('email'))->exists()) {
            return redirect('/register/infomation');
        }

        $affiliate_user = $request->input('affiliate_user');
        $affiliate = $UserTable::where('user', $affiliate_user)->get();

        $UserTable->fill([
            'email' => $request->input('email'),
            'user' => $request->input('user'),
            'password' => Hash::make($request->input('password')),
            'affiliate_id' => $affiliate[0]['id'],
            'eth_address' => $request->input('eth_address'),
            'status' => 0,
        ])->save();

        $user = $UserTable::where('user', $request->input('user'))->get();

        $TicketTable->fill([
            'user_id' => $user[0]['id'],
            'ticket' => 0
        ])->save();

        return redirect('/login');
    }
}
