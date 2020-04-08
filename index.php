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
     <!--kidot de fodil-->
     <script src="https://kit.fontawesome.com/b811c1c09f.js" crossorigin="anonymous"></script>
     
 </head>
 <body>
     <header>
         <a href="./index.php"><img src="./images/logo.png" alt="logo" class="logo"/><span class="slogan">L'immbobilier à petit prix</span></a>
          <div class="container_rechercher">
             <input type="search" name="rechercher" class="recherche" placeholder="  Rechercher quelque chose">
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
          <div class="contact">
            <i class="fas fa-phone-square-alt"id="numero"><span>026200532</span></i><br>       
            <i class="fas fa-map-marker-alt"id="adresse"></i><span class="adres">rue khoudja khaled 
             batiment 5 tizi-ouzou</span>
          </div> 
          <span class="rej">rejoignez nous sur:</span>
         <div class="social-button">
           
             <a href="" title="notre page facebook" class="fab fa-facebook-f"></i></a>
             <a href=""title="twitter"><i class="fab fa-twitter"></i></a>
             <a href="" title="notre instagram"> <i class="fab fa-instagram"></i></a>
             <a href=""><i class="fab fa-linkedin"></i></a>
             <a href=""title="notre chaine youtube"><i class="fab fa-youtube"></i></a>
         </div>
         </div>
      </footer>
      <!--Scriptes -->
        <script type="text/javascript" src="./js/jQuery.js"></script>
        <script src="./js/jsscript.js"></script>
     <!--ajouter a la fin pour que la page ce recharche plus rapidement-->
   </body>
</html>