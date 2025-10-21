<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>{{ $title ?? 'À propos' }}</title>
</head>
<body>
  <h1>À propos</h1>
  

  <nav>
    <a href="{{ route('home') }}">Accueil</a> |
    <a href="{{ route('about') }}">À propos</a>
  </nav>
  <p>Ceci est mon nombre préféré {{ 2*4 }}</p>
<p>La date d'aujourd'hui est : {{ date("Y-m-d") }}</p> 
</body>
</html>