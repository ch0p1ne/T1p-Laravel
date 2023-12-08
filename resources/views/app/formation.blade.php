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

            <br>
            <hr>
            <br>

        <div style="margin-left: 40%;">
            <form style="margin-bottom: 3%" action="{{ route('app.createF') }}" method="post">
                @csrf
                <label style="font-weight: bold; font-size: 22px;" for="nom"> Nom de la formation formation <br></label>
                <input style="margin: 1em;" type="text" name="name" placeholder="remplir ici le nom" id="nom"><br>

                <label style="font-weight: bold; font-size: 22px;" for="nombre"> Nombre de participant <br></label>
                <input style="margin: 1em;" type="text" name="nbr_participant" placeholder="remplir ici le nombre" id="nombre"><br>
                <button>Enregister</button>
            </form>
        </div>
            <p style="color: #718096;font-size: 18px;display: inline-block;width: 400px;margin: 0 5% 40% 40%">Les vérifications des saisis ne sont encore géré ni en frotend ni en backend, entrez des valeurs pertinantent</p>
    </div>
</body>
</html>
