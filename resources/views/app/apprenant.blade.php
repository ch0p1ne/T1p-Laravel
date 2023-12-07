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

    @foreach($apprenants as $apprenant)
        <h1> {{ $apprenant->name  }}</h1>
        <p> {{$apprenant->age}}</p>
        <p> {{$apprenant->formation}}</p>
    @endforeach

</div>
</body>
</html>
