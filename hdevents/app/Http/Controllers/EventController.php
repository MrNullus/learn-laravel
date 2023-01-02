<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{

  public function index() {
    // - Chamada de um método do Eloquent
    $events = Event::all();

    return view('welcome', ['events' => $events]);
  }

  public function create() {
    return view('events.create');
  }

}
