<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}} - Conrole de Séries </title>
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('series.index') }}">Home</a>

    @auth
      <a href="{{ route('logout') }}">Sair</a>
    @endauth

    @guest
      <a href="{{ route('login') }}">Entrar</a>
    @endguest
  </div>
</nav>

<body class="container">
  <h1>{{$title}}</h1>

  @isset($mensagemSucesso)
    <div class="alert alert-success">
      {{ $mensagemSucesso }}
    </div>
  @endisset

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{$slot}}
</body>
</html>