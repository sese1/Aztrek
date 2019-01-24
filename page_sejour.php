<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$sejour = getOneSejour($id);
$departs = getAllDepartBySejour($id);

getHeader($sejour["titre"], "aztrek site de voyage ....", [], 'page-sejour');
?>


<main class="main-circuit">
    <section id="presentation">
        <article class="presentation">
            <h2><?= $sejour["titre"]; ?></h2>
            <p><?= $sejour["description"]; ?></p>
            <ul class="description-sejour">
                <li><a href="#"><i class="far fa-calendar-alt"></i></a> <?= $sejour["duree"]; ?> jours</li>
                <li><a href="#"><i class="fas fa-euro-sign"></i></a> à partir de <?= $sejour["prix_indicatif"]; ?>€</li>
                <li><a href="#"><i class="fas fa-signal"></i></a> <?= $sejour["difficulte_libelle"]; ?>
                    (Niveau <?= $sejour["difficulte_niveau"]; ?>/5)
                </li>
            </ul>


        </article>

        <aside class="img-sejour-1 container">
            <img src="uploads/<?= $sejour["image"]; ?>" alt="cenotes">
        </aside>
</main>

<section class="depart">
    <h2>Nos Départs</h2>
    <?php if (count($departs) > 0) : ?>
        <table class="sejour_dispo">
            <tr>
                <th>Date de départ</th>
                <th>Date de retour</th>
                <th>Prix</th>
                <th>Places restantes</th>
                <th>Réservez dès maintenant</th>
            </tr>
            <?php foreach ($departs as $depart) : ?>
                <tr>
                    <td><?= $depart["date_depart_format"]; ?></td>
                    <td><?= $depart["date_retour_format"]; ?></td>
                    <td><?= $depart["prix"]; ?> €</td>
                    <?php if ($depart["places"] > 5): ?>
                        <td><?= $depart["places"]; ?></td>
                    <?php elseif ($depart["places"] <= 5 & $depart["places"] > 0): ?>
                        <td>Plus que <?= $depart["places"]; ?> places</td>
                    <?php else : ; ?>
                        <td>plus de place</td>
                    <?php endif; ?>
                    <?php if ($depart["places"] > 0): ?>
                        <td><a class="btn" href="#">S'INSCRIRE</a></td>
                    <?php else : ; ?>
                        <td><a href="#">EPUISE</a></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <h4>Plus de séjour disponible pour cette destination</h4>
    <?php endif; ?>
</section>


<?php getFooter(); ?>





