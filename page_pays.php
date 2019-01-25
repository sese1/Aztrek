<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$destination = getOneEntity("destination", $id);
$sejours = getAllSejoursByPays($id);


getHeader($destination["titre"] , "aztrek site de voyage ....", [], 'page-pays');
?>

<main>
    <section class="section-circuit">
        <h2>Nos Séjours :<?= $destination["titre"]; ?></h2>

        <?php if (count($sejours) > 0) : ?>

            <div class="circuit">
                <?php foreach ($sejours as $sejour) : ?>
                    <article id="premiere-place">
                        <p class="circuit-name"><?= $sejour["titre"]; ?></p>
                        <a href="page_sejour.php?id=<?= $sejour["id"]; ?>" class="photo-concours">
                            <img src="uploads/<?= $sejour["image"]; ?>" alt="Sejour">
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>


        <?php else : ?>
            <p>Pas de séjour actuellement, on revient très vite !!!</p>
        <?php endif; ?>

        <a href="page_sejour.php?id=<?= $sejour["id"]; ?>" class="bouton">JE DECOUVRE</a>
    </section>
</main>


<?php getFooter(); ?>



