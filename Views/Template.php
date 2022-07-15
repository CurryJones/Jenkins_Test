<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style_accueil.css" />
    <title><?= $pageTitle ?></title>
</head>

<body>
    <header>
        <h1><a href="">Pahandre</a></h1>
        <nav>
            <ul>
                <li><a href="">Accueil</a></li>
                <li><a href="">Géographie</a></li>
                <li><a href="">Les Personnages</a></li>
                <li><a href="">Les Courants</a></li>
            </ul>
        </nav>

    </header>
    <?= $content ?>
    <footer>
        <div>
            <h1>Derniers ajouts</h1>
            <p>Les dernières idées qui m'ont traversé l'esprit.</p>
        </div>
        <p>Créé par Romain Pagneux</p>
    </footer>
</body>

</html>