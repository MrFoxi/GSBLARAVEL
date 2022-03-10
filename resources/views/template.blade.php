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
    <a class="navbar-brand" href="/"><img src="/images/logo_gsb.png" width="115" height="73" alt=""></a>
    <a class="navbar-brand navbar-center navbar-hover" href="/Rapport">Rapport</a>
    <a class="navbar-brand navbar-hover" href="/Praticiens">Praticiens</a>
    <a class="navbar-brand navbar-hover" href="/InfoPerso">Infomations Personnel</a>
    <a class="navbar-brand  navbar-fin navbar-hover" href="/logout">Logout</a>
  </nav>
  @yield('content')
</body>
</html>