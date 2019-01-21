
<?php
require_once "model/database.php";
require_once "functions.php";

getHeader("Accueil","aztrek site de voyage ....");
?>


<header class="page-header">

    <nav class="top-nav container">
        <div class="logo">
            <a href="index.php" title="Accueil"><img src="images/0_bg_header/logo-Aztrek.png" alt="Logo"></a>
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

  <main>

    <section class="nouvelles-destinations container">


      <div class="dest-pays">
        <div class="pays">

          <div class="item-img">
            <a href="#">
              <img src="images/1_nouvelles_destinations/1-photo_guatemala-300-400.jpg" alt="guatemala" /></a>
            <h3>GUATEMALA</h3>
          </div>
        </div>

        <div class="pays">

          <div class="item-img">
            <a href="#">
              <img src="images/1_nouvelles_destinations/2-photo_salvador-300-400.jpg" alt="salvador" /></a>
            <h3>SALVADOR</h3>
          </div>
        </div>

        <div class="pays">
          <div class="item-img">
            <a href="#">
              <img src="images/1_nouvelles_destinations/3-photo_honduras-300-400.jpg" alt="honduras" /></a>
            <h3>HONDURAS</h3>

          </div>
        </div>

        <div class="pays">

          <div class="item-img">
            <a href="#">
              <img src="images/1_nouvelles_destinations/4-photo_costa_rica-300-400.jpg" alt="costa rica" /></a>
            <h3>COSTA RICA</h3>
          </div>
        </div>
      </div>

    </section>

    <section class="coeur">

      <h2>Les coups de coeur des voyageurs</h2>

      <div class="owl-carousel owl-cdc owl-dot">

        <article class="article-cdc">

          <div class="img">
            <a href="#">
              <img src="images/2_coups_de_coeur/1-marie-540-395.jpg" alt="marie-mexique" /></a>
            <img src="images/2_coups_de_coeur/picto_coeur.png" alt="coeur" class="picto-coeur" />
          </div>

          <div class="infos">

            <header class="title-marie">
              <h3>Le coup de coeur de Marie</h3>
              <h4>Trésors du Yucatan</h4>
            </header>

            <ul>
              <li class="pays"><a href="#">MEXIQUE</a></li>
              <li class="prix"><a href="#">8 jours à partir de 2100€</a></li>
              <li class="blog"><a href="#">SUIVEZ MARIE<img src="images/2_coups_de_coeur/blogger-letter-logotype_bleu.png"
                    alt="blog" class="picto-blog" /></a></li>

                    <div class="btn">
                      <a href="#" class="btn">En savoir + </a>
                    </div>
              
            </ul>

          </div>

        </article>

        <article class="article-cdc">

          <div class="img">
            <a href="#">
              <img src="images/2_coups_de_coeur/2-sten-540-395.jpg" alt="sten-mexique" /></a>
              <img src="images/2_coups_de_coeur/picto_coeur.png" alt="coeur" class="picto-coeur" />
          </div>

          <div class="infos">

            <header class="title-sten">
              <h3>Le coup de coeur de sten</h3>
              <h4>les volcans</h4>
            </header>

            <ul>
              <li class="pays"><a href="#">GUATEMALA</a></li>
              <li class="prix"><a href="#">10 jours à partir de 3100€</a></li>
              <li class="blog"><a href="#">SUIVEZ STEN<img src="images/2_coups_de_coeur/blogger-letter-logotype_bleu.png"
                alt="blog" class="picto-blog" /></a></li>
              
                <div class="btn">
                  <a href="#" class="btn">En savoir + </a>
                </div>

            </ul>

          </div>

        </article>

        <article class="article-cdc">

          <div class="img">
            <a href="#">
              <img src="images/2_coups_de_coeur/3-lorie-540-395.jpg" alt="Lorie-salvador" /></a>
              <img src="images/2_coups_de_coeur/picto_coeur.png" alt="coeur" class="picto-coeur" />
          </div>

          <div class="infos">

            <header class="title-Lorie">
              <h3>Le coup de coeur de Lorie</h3>
              <h4>Des parcs naturels</h4>
            </header>

            <ul>
              <li class="pays"><a href="#">SALVADOR</a></li>
              <li class="prix"><a href="#">8 jours à partir de 2100€</a></li>
              <li class="blog"><a href="#">SUIVEZ LORIE<img src="images/2_coups_de_coeur/blogger-letter-logotype_bleu.png"
                alt="blog" class="picto-blog" /></a></li>
               
                <div class="btn">
                  <a href="#" class="btn">En savoir + </a>
                </div>
            </ul>

          </div>

        </article>

        <article class="article-cdc">

          <div class="img">
            <a href="#">
              <img src="images/2_coups_de_coeur/4-flo-540-395.jpg" alt="Flo-honduras" /></a>
              <img src="images/2_coups_de_coeur/picto_coeur.png" alt="coeur" class="picto-coeur" />
          </div>

          <div class="infos">

            <header class="title-Flo">
              <h3>Le coup de coeur de Flo</h3>
              <h4>Les animaux</h4>
            </header>

            <ul>
              <li class="pays"><a href="#">SALVADOR</a></li>
              <li class="prix"><a href="#">8 jours à partir de 2100€</a></li>
              <li class="blog"><a href="#">SUIVEZ FLO<img src="images/2_coups_de_coeur/blogger-letter-logotype_bleu.png"
                alt="blog" class="picto-blog" /></a></li>
             
                <div class="btn">
                  <a href="#" class="btn">En savoir +</a>
                </div>

             
            </ul>

          </div>

        </article>

        <article class="article-cdc">

          <div class="img">
            <a href="#">
              <img src="images/2_coups_de_coeur/5-camille-540-395.jpg" alt="Camille-Costa-rica" /></a>
              <img src="images/2_coups_de_coeur/picto_coeur.png" alt="coeur" class="picto-coeur" />
          </div>

          <div class="infos">

            <header class="title-Camille">
              <h3>Le coup de coeur de Camille</h3>
              <h4>Des plages</h4>
            </header>

            <ul>
              <li class="pays"><a href="#">COSTA RICA</a></li>
              <li class="prix"><a href="#">8 jours à partir de 2100€</a></li>
              <li class="blog"><a href="#">SUIVEZ CAMILLE<img src="images/2_coups_de_coeur/blogger-letter-logotype_bleu.png"
                alt="blog" class="picto-blog" /></a></li>
              
                <div class="btn">
                  <a href="#" class="btn">En savoir +</a>
                </div>

            </ul>

          </div>

        </article>


      </div>

    </section>

  </main>

  <section class="vos-envies-container">

    <h2>Voyagez selon vos envies</h2>

    <div class="envies-123">

      <article class="article-envies">
        <h4>Une envie de liberté</h4>
        <a href="#">
          <img src="images/3_vos_envies/frog-897418_1920.jpg" alt="grenouille-seule" /></a>
        <h3>Voyager seul</h3>
        <p>Testez le circuit autonome</p>
      </article>

      <article class="article-envies">
        <h4>Un voyage de noce</h4>
        <a href="#">
          <img src="images/3_vos_envies/frogs-897387_1920.jpg" alt="grenouille-duo" /></a>
        <h3>Voyager en duo</h3>
        <p>Testez le circuit confort</p>
      </article>

      <article class="article-envies">
        <h4>On part entre amis</h4>
        <a href="#">
          <img src="images/3_vos_envies/frogs-897981_1920.jpg" alt="grenouille-groupe" /></a>
        <h3>Voyager en groupe</h3>
        <p>Testez le circuit Trek</p>
      </article>

    </div>

    <div class="btn">
      <a href="#" class="btn">Découvrez nos circuits</a>
    </div>

  </section>

  <section class="tout-le-monde-container">

    <div class="container">

      <div class="title-section">

        <h2>Tout le monde à la parole</h2>
      </div>

      <div class="interview">

        <article class="item">
          <div class="item-img"><a href=""><img src="images/4_temoignages/market-960361_1920.jpg" alt=""></a></div>
          <div class="item-infos">
            <h3>Juanita - habitante Salvador</h3>

            <p> « Je suis ravie à chaque visite, je fais de belles rencontres . Les voyageurs nous aident bien dans
              notre
              quotidien, il y a un vrai apport
              Grâce à la société AZTREK, notre quotidien s'est nettement amélioré.»

            </p>

          </div>
        </article>

        <article class="item">
          <div class="item-img"><a href=""><img src="images/4_temoignages/Melinda_Garcia_Conseillere_voyage.jpg" alt=""></a></div>
          <div class="item-infos">
            <h3>Sophie - spécialiste voyage Amérique centrale</h3>

            <p> « Je suis ravie d'avoir rejoint l'agence de voyage Aztrek; une agence dynamique avec de vrais valeures
              éco responsables .Je peux vraiment proposer des voyages plutôt découverte et aventure,I ls m'ont fait
              confiance dans la mise en place des nouveaux séjours étant originaire du Costa Rica  »
            </p>

          </div>
        </article>

        <article class="item">
          <div class="item-img">
            <a href="#"><img src="images/4_temoignages/people-3116264_1920.jpg" alt=""></a></div>
          <div class="item-infos">
            <h3>Julien - voyageur régulier Aztrek</h3>

            <p> « C'est à chaque fois un vrai plaisir de découvrir tous ses magnifiques lieux, de faire partie
              intégrante
              des populations dans le respect des cultures locales et de l'environnement »
            </p>

          </div>
        </article>    

      </div>      

    </div>

  <div class="avis">
 
    <a href="#" class="btn">Lire tous nos avis</a>    
    <a href="#" class="btn">Laissez votre avis</a>



</div>
  </section>

<?php getFooter(); ?>

  


</html>