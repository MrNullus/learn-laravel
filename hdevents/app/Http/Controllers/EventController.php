<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{

  public function index() {
    $events = Event::all();

    return view('welcome', []);
  }

  public function create() {
    return view('events.create');
  }

}
