<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>URL</title>
</head>
<body>

<div class="container">
    <h1> Version 1.0 <sp style="font-size: 14px">par thomas souah</sp></h1>
    <h2> Site web </h2>

    <p>Voici quelques liens pour interagir avec l'application :</p>
    <ul style="font-size: large; font-style: italic;">
        <li>- <bold><a href=" {{ route('formations') }}">La liste des formations</a> </bold> </li>
        <br>
        <li>- <bold><a href=" {{ route('apprenants') }}">La liste des apprenants</a> </bold> </li>
    </ul>
</div>

</body>
</html>
