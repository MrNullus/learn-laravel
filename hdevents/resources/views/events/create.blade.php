@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

  <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    
    <form action="/events" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="image">Imagem do Evento</label>
        <input 
          type="file" 
          name="image" 
        />
      </div>
      <div class="form-group">
        <label for="title">Evento:</label>
        <input 
          type="text" 
          class="form-control" 
          id="title" 
          name="title"
          placeholder="Nome do evento" 
        />
      </div>

      <div class="form-group">
        <label for="title">Local do evento:</label>
        <input 
          type="text" 
          class="form-control" 
          id="city" 
          name="city" 
          placeholder="Local do evento" 
        />
      </div>

      <div class="form-group">
        <label for="title">O evento é privado?</label>
        <select name="private" id="private" class="form-control">
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select>
      </div>

      <div class="form-group">
        <label for="title">Descrição:</label>
        <textarea 
          name="description" 
          id="description" 
          cols="30" 
          rows="10"
          class="form-control" 
          placeholder="O que vai acontecer no evento?" 
        ></textarea>
      </div>
      <div class="form-group">
        <label for="title">Adicine itens de infraestrutura:</label>
        <div class="form-group">
          <input 
            type="checkbox" 
            name="items[]" 
            value="cadeiras" 
          />
          Cadeiras
        </div>
        <div class="form-group">
          <input 
            type="checkbox" 
            name="items[]" 
            value="palco" 
          />
          Palco
        </div>
        <div class="form-group">
          <input 
            type="checkbox" 
            name="items[]" 
            value="Open foods" 
          />
          Cerveja Gratis
        </div>
        <div class="form-group">
          <input 
            type="checkbox" 
            name="items[]" 
            value="Brindse" 
          />
          Brindes
        </div>
      </div>

      <button class="btn btn-primary">
        Criar Evento
      </button>
    </form>
  </div>

@endsection
