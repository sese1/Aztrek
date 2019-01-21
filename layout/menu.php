<?php
require_once __DIR__. "/../config/parameters.php";
require_once __DIR__. "/../model/database.php";

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

        <li> <a href="#">Le blog</a></li>
        <li><a href="#">Mon espace personnel</a></li>
    </ul>

</nav>