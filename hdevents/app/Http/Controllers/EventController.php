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

    $event->title       = $request->title;
    $event->date        = $request->date;
    $event->city        = $request->city;
    $event->private     = $request->private;
    $event->description = $request->description;
    $event->items       = $request->items;

    // Image Upload
    if ($request->hasFile('image') && $requst->file('image')->isValid()) {
      // pega a imagem vinda da requisição
      $requestImage      = $request->image();

      // pega a extensão 
      $extension         = ".".$requstImage->extension();
      $originalNameImage = $requestImage->getClientOriginalName();
      $dateNow           = strtotime("now");
      $newImageName      = md5($originalNameImage.$dateNow.$extension);

      // lugar onde a imagem será savla, caso não exista a pasta será criada
      $request->image->move(public_path('images/events'), $newImageName);

      // passando a imagem para a requisição
      $event->image = $newImageName;
    }

    $event->save();

    return redirect('/')->with('msg', 'Eevento criado com sucesso!');
  }

  public function show($id) {
    $event = Event::findOrFail($id);

    return view('events.show', ['events' => $event]);
  }

}
