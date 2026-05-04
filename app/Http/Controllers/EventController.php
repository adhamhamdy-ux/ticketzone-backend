<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return Event::all();
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());

        return response()->json([
            'message' => 'Event created successfully!',
            'data' => $event
        ], 201);
    }
}