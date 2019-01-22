<?php
require_once __DIR__ . "/../config/parameters.php";
require_once __DIR__ . "/../functions.php";

$user = getConnectedUser();

$destinations = getAllEntities("destination");
?>


<nav class="main-nav">

    <a class="burger" href="#sidr-main">
        <img src="images/0_bg_header/lines-menu.png" alt="">
    </a>

    <ul class="main-menu">
        <li>
            <a href="index.php" title="Accueil" class="home-link">
                <img src="images/0_bg_header/picto_home.png" alt="home">
            </a>
        </li>

        <li>
            <a href="index.php#nos-destinations">Nos déstinations</a>
            <ul>
                <?php foreach ($destinations as $destination) : ?>
                    <li>
                        <a href="page_pays.php?id=<?= $destination["id"]; ?>">
                            <?= $destination["titre"]; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>

        <li><a href="#">Nos circuits</a></li>

        <li><a href="#">Le blog</a></li>

        <?php if (isset($user)) : ?>
            <li><a href="#"><i class="fa fa-user"></i> <?= $user["email"]; ?></a></li>
            <li><a href="<?= SITE_ADMIN . "logout"; ?>">Déconnexion</a></li>
        <?php else: ?>

            <li><a href="<?= SITE_ADMIN; ?>">Connexion</a></li>
        <?php endif; ?>
    </ul>

</nav>


