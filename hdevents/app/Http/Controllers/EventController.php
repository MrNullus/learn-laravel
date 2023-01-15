<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Model
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

  public function store(Request $request) {
    $event = new Event;

    $event->title = $request->title;
    $event->city = $request->city;
    $event->private = $request->private;
    $event->description = $request->description;

    $event->save();

    return redirect('/')->with('msg', 'Eevento criado com sucesso!');
  }

}
