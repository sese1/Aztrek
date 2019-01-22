
<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$sejour = getOneSejour($id);

getHeader("Accueil","aztrek site de voyage ....");
?>



<body class="page_sejour">

  <header class="page-header">

    <nav class="top-nav container">
      <div class="logo">
        <a href="index.php" title="Accueil"><img src="images/0_bg_header/logo-Aztrek.png" Logo"></a>
      </div>

     
      <ul class="menu-secondaire">
        <li><a href="#">Qui sommes-nous ?</a></li>

        <form class="search-form" action="#" method="get">
          <input type="text" name="keywords" value="" placeholder="Rechercher">
          <button type="submit" name="submit-btn"><img src="images/0_bg_header/picto_rechercher.png" alt="rechercher">
            <span class="sr-only">Valider</span></button>
        </form>

        <li> <a href="#">Contact</a></li>

      </ul>
    </nav>

    <div class="page-header-content">

      <div class="container">



          <?php getMenu(); ?>

        <h1>SPECIALISTE DU VOYAGE ECO TOURISME EN AMERIQUE CENTRALE</h1>

        <div class="header-dest">

          <h2><?= $sejour["titre"]; ?></h2>


         
        </div>

      </div>

    </div>

  </header>

  <main class="main-circuit">
    <section id="presentation">
        <article class="presentation">
            <h2><?= $sejour["titre"]; ?></h2>
            <p><?= $sejour["description"]; ?></p>
           <ul class="description-sejour">
                <li><a href="#"><i class="far fa-calendar-alt"></i></a> 6 jours</li>
            <li><a href="#"><i class="fas fa-euro-sign"></i></a> à partir de 3290 €</li>
            <li><a href="#"><i class="fas fa-signal"></i></a> Niveau <?= $sejour["difficulte"]; ?>/5</li>
            </ul> 
           
            
              
        </article>
        
    <aside class="img-sejour-1 container">
        <img src="uploads/<?= $sejour["image"]; ?>" alt="cenotes">
    </aside>
</main>

<section class="depart">

        <h2>Nos départs</h2>


    <table>
        <tr>
            <th>Date de départ</th>
            <th>Date de retour</th>
            <th>Prix</th>
            <th>Places restantes</th>
            <th>Réservez dès maintenant</th>
        </tr>
        <tr>
            <td>15/02/2019</td>
            <td>15/02/2019</td>
            <td>3090€</td>
            <td>14</td>
            <td><a href="#">S'INSCRIRE</a></td>
        </tr>
        <tr>
            <td>15/02/2019</td>
            <td>15/02/2019</td>
            <td>3090€</td>
            <td>7</td>
            <td><a href="#">S'INSCRIRE</a></td>
        </tr>
    </table>





</section >




  <?php getFooter(); ?>





