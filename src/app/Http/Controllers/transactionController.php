<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LotteryReservation;
use App\Models\Ticket;

class transactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('verify');
    }

    public function index (Request $request) {

        $ticket = Ticket::select('ticket')->where('user_id', $request->session()->get('user_id'))->get();
        $user = $request->session()->get('user');
        $ticket = $ticket[0]['ticket'];

        $transaction = LotteryReservation::where('user_id', $request->session()->get('user_id'))->where('status', 0)->get();
        logger($transaction);

        return view('transaction')->with([
            'user' => $user,
            'ticket' => $ticket,
            'transaction' => $transaction
        ]);
    }

    public function cancel (Request $request) {

        $ticketA = Ticket::select('ticket')->where('user_id', $request->session()->get('user_id'))->get();

        LotteryReservation::where('id', $request->input('transaction_id'))->where('user_id', $request->session()->get('user_id'))
        ->update([
            'status' => 99
        ]);

        $gem_id = LotteryReservation::select('gem_id')->where('id', $request->input('transaction_id'))->where('user_id', $request->session()->get('user_id'))
        ->get();

        if ($gem_id[0]['gem_id'] == 1) {
            $backfee = 20;
        } else if ($gem_id[0]['gem_id'] == 2) {
            $backfee = 40;
        } else if ($gem_id[0]['gem_id'] == 3) {
            $backfee = 60;
        } else if ($gem_id[0]['gem_id'] == 4) {
            $backfee = 80;
        }

        Ticket::where('id', $request->session()->get('user_id'))
        ->update([
            'ticket' => $ticketA[0]['ticket'] + $backfee
        ]);

        return redirect('/transaction');
    }
}
