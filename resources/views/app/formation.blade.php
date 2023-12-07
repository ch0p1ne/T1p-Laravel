<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste des formations</title>
</head>
<body>
    <div class="container">

        @foreach($formations as $formation)
            <h1> {{ $formation->name  }}</h1>
            <p> {{$formation->nbr_participant}}</p>
        @endforeach

        <div style="display: inline-block">
            <hr>
            <h2 style="color: darkseagreen">Liens :</h2>
                <p> Retourné a la page d'accueil en <a href="{{ route('accueil') }}">cliquant ici</a></p>
        </div>
    </div>
</body>
</html>
