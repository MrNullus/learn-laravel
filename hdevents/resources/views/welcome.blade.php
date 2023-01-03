@extends('layouts.main')

@section('title', 'Bem Vindo')

@section('content')
  <div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>

    <form action="">
      <input
        type="search"
        name="search"
        id="search"
        class="form-control"
        placeholder="Proucuro por..."
      />
    </form>
  </div>

  <div class="events-container col-md-12">
    <h2>Próximos eventos</h2>
    <p>Veja os eventos dos próximos</p>

    <div id="cards-container" class="row">
      @foreach ($events as $event)
        <div class="card col-md-3">
          <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}" />

          <div class="card-body">
            <p class="card-date">
              03/05/2005
            </p>
            <h5 class="card-title">
              {{ $event->title }}
            </h5>
            <p class="card-participants">
              X Participantes
            </p>
            <a href="#" class="btn btn-primary">
              Saber mais
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
