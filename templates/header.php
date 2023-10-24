<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index2.css">
    <title>Portfolio Grégoire LE BARON</title>
</head>

<body>

    <header>
            <div class="headerleft">
                <h1>Grégoire LE BARON</h1>
            </div>
            <div class="headerright">
                <a href="index.php?page=accueil">Accueil</a>
                <a href="index.php?page=profil" <?php onglet('profil');?> >Profil</a>
                <a href="index.php?page=docs" <?php onglet('docs');?> >Documents techniques</a>
                <a href="index.php?page=veitech" <?php onglet('veitech');?> >Veilles technologiques</a>
                <!-- <a href="index.php?page=veijur" <?php onglet('veijur');?> >Veille juridique</a> -->
            </div>
        </header>

    <section class="body">