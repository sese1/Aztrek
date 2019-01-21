<?php
require_once "model/database.php";
require_once "functions.php";

getHeader("Accueil", "aztrek site de voyage ....");
?>


<body class="page_pays">

<header class="page-header">

    <nav class="top-nav container">
        <div class="logo">
            <a href="index.php" title="Accueil"><img src="images/0_bg_header/logo-Aztrek.png" Logo></a>
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

    <?php getMenu(); ?>

    <h1>SPECIALISTE DU VOYAGE ECO TOURISME EN AMERIQUE CENTRALE</h1>

    <div class="header-dest">

        <h2>MEXIQUE</h2>


    </div>

</header>

<main>
    <section class="section-circuit">
        <h2>Nos Séjours au Méxique</h2>

        <div class="circuit">
            <article id="premiere-place">
                <p class="circuit-name">Les Trésors du Yucatan</p>

                <a href="page_sejour.php" class="photo-concours"> <img src="uploads/1-guatemala-grande.jpg" alt="">
                </a>

            </article>
            <article id="deuxieme-place">
                <p class="circuit-name">Les mystérieuses cités d'or</p>

                <a href="page_sejour.php" class="photo-concours"> <img src="uploads/2-salvador-grande.jpg" alt="">
                </a>

            </article>


        </div>
        <a href="page_sejour.php" class="bouton">JE DECOUVRE</a>
    </section>
</main>


<?php getFooter(); ?>