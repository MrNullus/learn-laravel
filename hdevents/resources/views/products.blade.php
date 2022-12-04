@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    <h1>Tela Produtos</h1>

    @if ($busca != '')
        <h2>O usuario está buscando por: {{ $busca }}</h2>
    @endif

    <a href="/">Voltar para o Home</a>
@endsection
