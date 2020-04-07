<!DOCTYPE html>
<html >
 <head>
     <!--les metas necessaire-->
     <meta charset="UTF-8">
     <meta name="description" content="Un site de vente d'apartement, villa et studio pour la wilaya de tizi ouzou ">
     <meta name="keywords" content="tizi-ouzou,vente,appartement,maison,villa,algerie">
     <meta name="viewport" content="width=width-device, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--le titre-->
     <title>Vilavie - Acceuil</title>
     <!--icon du site-->
     <link rel="icon" href="./images/icon/favicon.ico">
     <!--feuilles de style-->
     <link rel="stylesheet" href="./style/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
     <!--Scriptes-->
     <script type="text/javascript" src="./js/jQuery.js"></script>
     <script src="./js/jsscript.js"></script>
 </head>
 <body>
     <header>
         <img src="./images/logo.png" alt="logo" class="logo"/>
          <div class="container_rechercher">
             <input type="text" name="rechercher" class="recherche" placeholder="Rechercher">
             <button class="btn_recherche"><i class="fas fa-search"></i></button>
          </div>
          <div class="inscription_connexion">
             <a href="./admin"class="inscription" >Administrateur</a>
             <a href="./pages/inscription.php" class="inscription">Crée un compte</a>
             <a href="./pages/connexion.php" class="inscription">Se connecter</a>
          </div>
          <nav>
             <ul class="navigation">
                 <a href="./pages/Immobilier.php" class="onglet_menu"><li>Immobiliers</li></a>
                 <a href="./pages/deposer_annonce.php"><li>Déposer une annonce</li></a>
                 <a href="./pages/contact" class="onglet_menu"><li>Contact</li></a>
             </ul>
          </nav>
     </header>



     <footer>
         <div class="a_propos">
              <h5 style="position:absolute;color:#ffffff">A PROPOS DE NOUS :</h5>
         </div>

         <div class="social-button">
             <a href=""><i class="fab fa-facebook-f"></i></a>
             <a href=""><i class="fab fa-twitter"></i></a>
             <a href=""><i class="fab fa-instagram"></i></a>
             <a href=""><i class="fab fa-linkedin"></i></a>
             <a href=""><i class="fab fa-youtube"></i></a>
         </div>
      </footer>
   </body>
</html>