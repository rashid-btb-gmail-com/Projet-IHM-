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
<?php
session_start();
$db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
  <body>
    <header>
     <!--Header du site -->
        <div class="container borderhr">
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
                  <li active><a href="./index.php#sec1" >Acceuil</a></li>
                  <li><a href="./pages/immobilier.php">Immobilier</a></li>
                  <li><a href="./pages/deposer_annonce.php#depose">Vendre</a></li>
                  <li><a href="./pages/contact.php">Contact</a></li>
                  <li id="separateur"> </li> <!--un separateur -->
                  <?php
                  if(isset($_SESSION["username"])){
                      ?>
                    <li>
                    <a href="" title="Mes favoris" id="onglet_profil"><i class="far fa-heart"></i>Mes favoris</a>
                    <a href="" title="Mon profil"><i class="far fa-user"></i>  <?php echo $_SESSION["nom"]."  ".$_SESSION["prenom"];?></a>  
                    </li>
                    <?php
                  }
                  else{
                      ?>
                    <li><a href="./pages/connexion.php#fullconnex">Se Connecter</a></li>
                  <li><a href="./pages/inscription.php#inscript">S'inscrire</a></li>
                  <?php
                  }
                  ?>
                  
              </ul>
          </div>
         </div>
        </nav>
    </div>
    </header>
    <!--photo de maison pour rechercher des bien a tizi ouzou -->
    <section class="sec1" id="sec1">
        <div class="container searchbox">
        <!--text centrer -->
         <h1>Avec "VILAVIE" L'immobilier à Petit Prix </h1>
         <h3>Chercher Des Biens Immobilier Sur La Wilaya de Tizi-Ouzou</h3>
         <form action="" id="formsearch"> <!-- boutton de rechercche -->
            <div class="searchform">
            <input type="search" name="tizisearch" id="tizisearch" placeholder="Nom De Daira ou Commune, Ex:Tizi-Ouzou">
            <button class="btn_recherche"><i class="fas fa-search"></i></button>
            </div>
         </form>
        </div>
        <!-- section des suggestions --> 
     </section>
     <section class="sec2">
      <div class="container">
        <div class="headsug">
          <h1 class="text-center text-uppercase font-weight-bold " >Nos suggestions</h1>
       </div>
       <div class="d-flex flex-wrap justify-content-center biensugbox ">
       <?php 
       $bienrep = $db->query('SELECT titre, daira, commune, lien_img FROM biens ORDER BY id desc LIMIT 0,8');
       while ($donne= $bienrep->fetch()){
       //affichage des biens les plus recents       
         echo('<div class="biensug" >
           <img src="./'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4>'.$donne['titre'].'</h4>
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].'</p>
          </div>
           <div class="linkdetail">
            <a href="#detail" class="linkdetail">Voir Detail</a> 
            </div>
         </div>');}
         $bienrep->closeCursor();
         ?>
                              
         </div>
      </div>             
     </section>
     <!--Le footer-->
     <footer> 
       <div class="container ">
        <div class="foot d-flex justify-content-between">
         <a href="./index.php" ><img class="logo-foot float-left" src="./images/logo.png" alt="le logo"></a>
            <div class="d-flex justify-content-between">
              <!-- les liens du footer-->
              <div class="onelinkfoot">
              <h5 class="titrelink">Les biens</h5>
              <a href="./pages/immobilier.php">Consulter un bien</a>
              <a href="./pages/deposer_annonce.php">vendre un bien</a>
              </div>
              <div class="onelinkfoot">
              <h5 class="titrelink"> Devenez client</h5>
              <a href="./pages/inscription.php">Inscrivez-Vous</a>
              </div>
              <div class="onelinkfoot">
              <h5 class="titrelink">Des questions!</h5>
              <a href="./pages/contact.php">Contactez-Nous</a>
              </div>
            </div>
            <!--Les reseignement-->
           <div class="reseign ">
            <i class="fas fa-phone-square-alt"id="numero"></i><span>026200532</span><br>       
            <i class="fas fa-map-marker-alt"id="adresse"></i><span class="adres">rue khoudja khaled 
             batiment 5 tizi-ouzou</span>
             <div class="social"> <!--Les reseau sociaux-->
             <h5>rejoignez nous sur<h5>
             <a href="" title="Notre page facebook" id="fb"class="sns fab fa-facebook-f"></a>
             <a href=""title="Notre twitter" class="sns fab fa-twitter"></a>
             <a href="" title="Notre instagram" class="sns fab fa-instagram"></a>
             <a href="" title="Notre Linked-in" class="sns fab fa-linkedin"></a>
           </div>
       </div>
        </div>
        
       </div>
     </footer> 
      <!--Scriptes -->
      <script src="./js/jquery.js"></script>
      <script src="./js/js.js"></script>
     <!--ajouter a la fin pour que la page ce recharche plus rapidement-->
   </body>
</html>