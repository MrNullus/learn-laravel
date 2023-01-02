@extends('layouts.main')

@section('title', 'Bem Vindo')

@section('content')
  @foreach($events as $event)
    <p>
      {{ $event->title }} -- {{ $event->description }}
    </p>
  @endforeach
@endsection
