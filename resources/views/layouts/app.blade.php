<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Dc Comics')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

  <header>
    <div class="container">
      <div class="row">
        <div class="col-auto me-auto">
          Dc Comics
        </div>
        <nav class="col-auto">
          <ul class="d-flex">
            <li>
              <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
              <a href="{{ route('comics.index') }}">Comics</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

</body>

</html>
