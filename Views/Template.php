<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/css/main.css" />
    <link rel="stylesheet" href="Views/css/header.css" />
    <link rel="stylesheet" href="Views/css/footer.css" />
    <title><?= $pageTitle ?></title>
</head>

<body id="main">
    <header id="topbar">
        <nav>
            <ul>

                <li><a href="index.php?=origin">Pahandre</a></li>
                <li><a href="index.php?=character">Les Personnages</a></li>
                <li><a href="index.php?=country">Les Pays</a></li>
                <li><a href="index.php?=flow">Les Courants</a></li>
            </ul>
        </nav>
        <h1 id="title">Bienvenue en Pahandre</h1>
        <nav>
            <ul>
                <li><a href="index.php?=register">Sign Up</a></li>
                <li><a href="index.php?=login">Login</a></li>
                <li><a href="index.php?=admin">Admin</a></li>
            </ul>
        </nav>

    </header>
    <?= $content ?>
    <footer id="footerbar">
        <p>Créé par Romain Pagneux</p>
        <p>Cartes dessinées avec l'aide de <a href="https://inkarnate.com/">Inkarnate</a></p>
    </footer>
</body>

</html>