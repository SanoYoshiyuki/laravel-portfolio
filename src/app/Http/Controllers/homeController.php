<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class homeController extends Controller
{
    public function __construct()
    {
        $this->middleware('verify');
    }

    public function index (Request $request) {

        $ticket = Ticket::select('ticket')->where('user_id', $request->session()->get('user_id'))->get();
        $user = $request->session()->get('user');
        $ticket = $ticket[0]['ticket'];

        return view('welcome')->with([
            'user' => $user,
            'ticket' => $ticket
        ]);
    }

    public function logout (Request $request)
    {
        session()->flush();
        return redirect('/login');
    }
}
