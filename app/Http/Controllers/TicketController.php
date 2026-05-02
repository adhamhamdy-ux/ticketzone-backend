<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Save a new ticket when user books
    public function store(Request $request) {
        $ticket = Ticket::create([
            'user_id'        => $request->user()->id,
            'event_id'       => $request->event_id,
            'quantity'       => $request->quantity,
            'total_price'    => $request->total_price,
            'payment_method' => $request->payment_method,
        ]);

        return response()->json(['ticket' => $ticket]);
    }

    // Get all tickets for logged-in user
    public function index(Request $request) {
        $tickets = Ticket::where('user_id', $request->user()->id)->get();
        return response()->json(['tickets' => $tickets]);
    }
}