
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

          <h2>Le trésor du YUCATAN</h2>


         
        </div>

      </div>

    </div>

  </header>

  <main class="main-circuit">
    <section id="presentation">
        <article class="presentation">
            <h2>Trésors du Yucatán</h2>
            <p>Le Mexique, et en particulier le Yucatán, est une terre de rêve. Elle y mêle quelques-uns des plus
                beaux sites mayas, riche patrimoine culturel, et des trésors naturels, comme la mer des Caraïbes ou
                les cenotes, ces puits souterrains ou à ciel ouvert, trous d’eau qui parsèment le plateau calcaire
                du Yucatán. L'âme indienne y est bien vivante, celle de la civilisation raffinée des Mayas à leur
                grande époque et bien sûr, mais également celle des Mayas d’aujourd’hui, qui ont gardé leurs us et
                coutumes. Des sites mayas incontournables et hors sentiers battus, un délicieux cocktail
                d’écotourisme et de
                découverte culturelle. Palenque et les sites de la forêt lacandone au Chiapas, un itinéraire
                ponctué de baignades en mer, en cenote et en lagune.</p>
           <ul class="description-sejour">
                <li><a href="#"><i class="far fa-calendar-alt"></i></a> 6 jours</li>
            <li><a href="#"><i class="fas fa-euro-sign"></i></a> à partir de 3290 €</li>
            <li><a href="#"><i class="fas fa-signal"></i></a> Niveau 1/5</li>
            </ul> 
           
            
              
        </article>
        
    <aside class="img-sejour-1 container">
        <img src="./images/sejour/cenotes.jpg" alt="cenotes">
    </aside>
</main>

<section class="depart">

        <h2>Nos départs</h2>

<table>

 
    <tr>
        <th>Du</th>
        <th>Au</th>
        <th>Prix</th>
        <th>Départ Assuré<br> à partir de </th>
        <th>Description de l'exemple</th>
    </tr>
    <tr>
        <td>01/02/2019</td>
        <td>15/02/2019</td>
        <td>3090€</td>
        <td>Assuré</td>
        <td><a href="#">S'INSCRIRE</a></td>
    </tr>
    <tr>
        <td>01/02/2019</td>
        <td>15/02/2019</td>
        <td>3090€</td>
        <td>Assuré</td>
        <td><a href="#">S'INSCRIRE</a></td>
    </tr>
    <tr>
        <td>01/02/2019</td>
        <td>15/02/2019</td>
        <td>3090€</td>
        <td>Assuré</td>
        <td><a href="#">S'INSCRIRE</a></td>
    </tr>
    <tr>
        <td>01/02/2019</td>
        <td>15/02/2019</td>
        <td>3090€</td>
        <td>Assuré</td>
        <td><a href="#">S'INSCRIRE</a></td>
    </tr>
    <tr>
        <td>01/02/2019</td>
        <td>15/02/2019</td>
        <td>3090€</td>
        <td>Assuré</td>
        <td><a href="#">S'INSCRIRE</a></td>
    </tr>
</table>

</section >




  <?php getFooter(); ?>

  <div class="container">
    <a href="#" class="back-to-top"><img src="images/5-footer/go-back-arrow_bleu.png" alt="back-to-top"></a>
  </div>




</body>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.sidr.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/scripts.js"></script>

</body>

</html>