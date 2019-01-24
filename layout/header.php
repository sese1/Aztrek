
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="...">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aztrek | <?= $title; ?></title>


    <link rel="shortcut icon" href="favicon.ico">
    <!-- lien polices et icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Ubuntu" rel="stylesheet">

    <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/main.css">

    <?php foreach ($stylesheets as $stylesheet) : ?>
        <link rel="$stylesheet" href=" <?= $stylesheet; ?>">
    <?php endforeach; ?>


</head>

<body class="<?= $body_class ?>">

<header class="page-header">

    <nav class="top-nav container">
        <div class="logo">
            <a href="index.php" title="Accueil"><img src="images/0_bg_header/logo-Aztrek.png" alt="Logo"></a>
        </div>


        <ul class="menu-secondaire">
            <li><a href="#">Qui sommes-nous ?</a></li>

            <form class="search-form" action="#" method="get">
                <input type="text" name="keywords" value="" placeholder="Rechercher">
                <button type="submit" name="submit-btn"><img src="images/0_bg_header/picto_rechercher.png"
                                                             alt="rechercher">
                    <span class="sr-only">Valider</span></button>
            </form>

            <li><a href="#">Contact</a></li>

        </ul>
    </nav>

    <div class="page-header-content">

        <?php getMenu(); ?>


        <h1>SPECIALISTE DU VOYAGE ECO TOURISME EN AMERIQUE CENTRALE</h1>

        <div class="header-dest">

            <h2>Découvrez nos nouvelles déstinations</h2>

            <div class="btn">
                <a href="#" class="btn">En savoir +</a>
            </div>


        </div>

    </div>

    </div>

</header>