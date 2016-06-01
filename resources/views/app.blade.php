<!DOCTYPE html>
<html lang="en" @yield('html.attr')>
  <head @yield('head.attr')>
    @yield('head.pre')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Jag Test')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head.post')
  </head>
  <body @yield('body.attr')>
    <header class="jumbotron text-center">
      <h1>@yield('title', 'Jag Test')</h1>
    </header>
    @if (auth()->check())
    @include('post.navigation')
    @endif

    @yield('content')

    @yield('body.post')
  </body>
</html>
