<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\LotteryReservation;
use SebastianBergmann\Environment\Console;

class lotteryController extends Controller
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

        return view('lottery')->with([
            'user' => $user,
            'ticket' => $ticket
        ]);
    }

    public function lottery(Request $request)
    {
        $LotteryReservation = new LotteryReservation;

        $ticketA = Ticket::select('ticket')->where('user_id', $request->session()->get('user_id'))->get();

        $LotteryReservation->fill([
            'user_id' => $request->session()->get('user_id'),
            'gem_id' => $request->input('character'),
            'status' => 0
        ])->save();

        Ticket::where('id', $request->session()->get('user_id'))
        ->update([
            'ticket' => $ticketA[0]['ticket'] - $request->input('fee')
        ]);

        return redirect('/lottery');
    }
}
