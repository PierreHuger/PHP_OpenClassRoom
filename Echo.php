<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premiere instruction : echo</title>
</head>


<body>

    <h2>Affichage de texte avec PHP</h2>

    <p>Aujourd'hui nous sommes le <?php date_default_timezone_set('Europe/Paris');
                                    echo date("d/m/Y H:i:s"); ?></p>
</body>

</html>