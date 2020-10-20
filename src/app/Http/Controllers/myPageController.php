<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class myPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('verify');
    }

    public function index(Request $request)
    {
        $ticket = Ticket::select('ticket')->where('user_id', $request->session()->get('user_id'))->get();
        $user = $request->session()->get('user');
        $ticket = $ticket[0]['ticket'];

        return view('mypage')->with([
            'user' => $user,
            'ticket' => $ticket
        ]);
    }
}
