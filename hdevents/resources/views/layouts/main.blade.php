<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/styles.css"/>
    <script src="/js/script.js"></script>
</head>

<body class="antialiased">
    <header>
      <h1>
        @yield('title')
      </h1>
      <iframe src="https://giphy.com/embed/XO8RMtRaK73isIt0i2" width="480" height="297" frameBorder="0"
          class="giphy-embed" allowFullScreen></iframe>
      <p><a href="https://giphy.com/gifs/ProBItExchange-dog-hello-hi-XO8RMtRaK73isIt0i2">via GIPHY</a></p>
    </header>

    @yield('content');

    <footer>
        <h5>Mr Nullus 💜 &copy; 2022</h5>
    </footer>
</body>

</html>
