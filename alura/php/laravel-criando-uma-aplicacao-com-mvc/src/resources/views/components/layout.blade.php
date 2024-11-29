<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}} - Conrole de Séries </title>
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="container">
  <h1>{{$title}}</h1>

  {{$slot}}
</body>
</html>