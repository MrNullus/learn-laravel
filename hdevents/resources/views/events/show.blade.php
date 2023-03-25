@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1">
	<div class="row">
		<div id="image-container" class="col-md-6">
			<img 
			 	class="img-fluid" 
			 	src="images/events/{{ $event->image }}" 
			 	alt="{{ $event->title }}" 
			/>
		</div>

		<div id="info-container" class="col-md-6">
			<h1>{{ $event->title }}</h1>
			<p class="event-city">
				<ion-icon name="location-outline">
					{{ $event->city }}
				</ion-icon>
			</p>
			<p class="events-participants">
				<ion-icon name="people-outline"></ion-icon>
				X Participantes
			</p>
			<p class="event-owner">
				<ion-icon name="star-outline"></ion-icon>
				Dono do Evento
			</p>
			<a href="#" class="btn btn-primary" id="event-submit">
				Confirmar Presença
			</a>
		</div>

		<div class="col-md-12" id="description-container">
			<h3>Sobre o evento:</h3>
			<p class="event-description">
				{{ $event->description }}
			</p>
		</div>
	</div>
</div>

@endsection