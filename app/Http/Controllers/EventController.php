<?php

namespace App\Http\Controllers;

use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
  public function index() {
        $events = Event::all();
        return response()->json(['events' => $events]);
    }

    public function byCategory($category) {
        $events = Event::where('category', $category)->get();
        return response()->json(['events' => $events]);
    }
}
