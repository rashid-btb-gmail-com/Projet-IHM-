<!DOCTYPE html>
<html >
 <head>
     <!--les metas necessaire-->
     <meta charset="UTF-8">
     <meta name="description" content="Un site de vente d'apartement, villa et studio pour la wilaya de tizi ouzou ">
     <meta name="keywords" content="tizi-ouzou,vente,appartement,maison,villa,algerie">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--le titre-->
     <title>Vilavie - Acceuil</title>
     <!--icon du site-->
     <link rel="icon" href="./images/icon/favicon.ico">
     <!--feuilles de style-->
     <link rel="stylesheet" href="./style/bootstrap.css">
     <link rel="stylesheet" href="./style/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
     <!--kidot de fodil-->
     <script src="https://kit.fontawesome.com/b811c1c09f.js" crossorigin="anonymous"></script>
     
 </head>

  <body>
    <header>
     <!--Header du site -->
        <div class="container">
        <nav>
        <!--la barre de navigation -->
         <div class="navbar navbar-default">
        <!--logo du site -->
          <div class=" navbar-header navbar-brand ">
              <a href="./index.php" ><img class="logo" src="./images/logo.png" alt="le logo"></a>
          </div>
          <!--les menu de navigation a droite  -->
          <div class="navbar-right"> 
              <ul>
                  <li active><a href="./index.php" >Acceuil</a></li>
                  <li><a href="./pages/immobilier.php">Immobilier</a></li>
                  <li><a href="./pages/deposer_annonce.php">Vendre</a></li>
                  <li><a href="./pages/contact.php">Contact</a></li>
                  <li id="separateur"> </li> <!--un separateur -->
                  <li><a href="./pages/connexion.php">Se Connecter</a></li>
                  <li><a href="./pages/inscription.php">S'inscrire</a></li>
              </ul>
          </div>
         </div>
        </nav>
    </div>
    </header>
    <!--photo de maison pour rechercher des bien a tizi ouzou -->
    <section class="sec1">
        <div class="container searchbox">
        <!--text centrer -->
         <h1>L'immobilier à Petit Prix Avec Vilavie</h1>
         <h2>Chercher Des Biens Immobilier a Tizi-Ouzou</h2>
         <form action="" id="formsearch"> <!-- boutton de rechercche -->
            <input type="search" name="tizisearch" id="tizisearch" placeholder="Chercher Un bien a Tizi Ouzou">
            <button class="btn_recherche"><i class="fas fa-search"></i></button>
         </form>
        </div>
        <!--rest a ameliorer  --> 
    </section>
    
      <!--Scriptes -->
      <script src="./js/jquery"></script>
        <script src="./js/jsscript.js"></script>
     <!--ajouter a la fin pour que la page ce recharche plus rapidement-->
   </body>
</html>