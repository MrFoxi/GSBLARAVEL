<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">LOGO</a>
    <a class="navbar-brand" href="/rapport">Rapport</a>
    <a class="navbar-brand" href="/praticien">Praticiens</a>
    <a class="navbar-brand" href="/InfoPerso">Infomations Personnel</a>
    
  </nav>
  @yield('content')
</body>
</html>