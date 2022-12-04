@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    @if ($id != null)
        <h1>Tela Produto</h1>
        <a href="/">Voltar para o Home</a>
    @endif
@endsection
