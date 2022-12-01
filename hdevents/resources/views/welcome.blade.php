@extends('layouts.main')

@section('title', 'Bem Vindo')

@section('content')
    <h1>
        Tela Principal
    </h1>
    <center>
      <iframe src="https://giphy.com/embed/XO8RMtRaK73isIt0i2" width="480" height="297" frameBorder="0" class="giphy-embed"
        allowFullScreen></iframe>
      <p><a href="https://giphy.com/gifs/ProBItExchange-dog-hello-hi-XO8RMtRaK73isIt0i2">via GIPHY</a></p>
    </center>

    @if (5 > 2)
        <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if ($nome === 'Gustavo')
        <p>O nome é Gustavo e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
    @elseif ($nome === 'Klateia')
        <p>O nome é Klateia e possui {{ $idade }} anos</p>
    @else
        <p>O nome é {{ $nome }} e possui {{ $idade }} anos</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        @if ($i > 2)
            <p>
                {{ $arr[$i] }} - {{ $i }}
            </p>
        @endif
    @endfor

    @php
        $name = 'Punk Junior Silveira';
        echo $name;
    @endphp

@endsection
