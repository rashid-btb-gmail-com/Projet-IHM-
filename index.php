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
            
                  <li><a href="#">Locations</a></li>                  
                  <li><a href="./pages/immobilier.php">Vente</a></li>
                  <li><a href="./pages/deposer_annonce.php#depose">Déposer une annonce</a></li>
                  <li><a href="./pages/contact.php">Contact</a></li>
                  <li id="separateur"> </li> <!--un separateur -->
                  <?php
                  if(isset($_SESSION["username"])){
                      ?>
                      
                        <li>        
                        <a href="./pages/profile.php#profile" title="Mon profil" onmouseover="onglet_mon_profil_af()"><i class="far fa-user"></i>  <?php echo $_SESSION["nom"]."  ".$_SESSION["prenom"];?></a> 
                        </li>
                        <li>
                        <a href="?action=deco" title="Déconnexion"><i class="fas fa-sign-out-alt"></i></a>
                        </li>
                    <?php
                    if(isset($_GET["action"])){
                        if($_GET["action"]="deco"){
                          $_SESSION["username"]=null;
                          ?>
                          <meta http-equiv="refresh" content="0">
                          <?php
                        }
                    }
                  }
                  else{
                    
                    $_SESSION["url_prec"]=$_SERVER['PHP_SELF'];
                    
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
    <!--carousel pour pub et guide -->
    <section class="sec">
     <div id="carouselControls" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
         <div class="carousel-item active " style="background:url(./images/bg1.jpg); background-size:cover;">
            <div class="d-block w-100 d-flex justify-content-center align-items-center imgsize ">
              <div class="carouselstyle">
              <h1>L'agence immobiliere VILAVIE</h1> <br>
              <h3>Vous fait visiter la kabylie a travers l'immobilier </h3> <br><br><br>
              <div class="pubbtnhover"><a href="./pages/contact.php" class="pubbtn">A propos de nous</a></div>
              </div>
            </div>
         </div>
         <div class="carousel-item" style="background:url(./images/bg2.jpg); background-size:cover;">
          <div class="d-block w-100 d-flex justify-content-center align-items-center imgsize ">
          <div class="carouselstyle">
              <h1>Vous connaisez la kabyle </h1> <br>
              <h3> et vous chercher un bien dans une region specifique </h3> <br><br><br>
              <div class="pubbtnhover"><a href="./index.php#sec1" class="pubbtn">Recherchez un bien</a></div>
          </div>

            </div>
         </div>
         <div class="carousel-item" style="background:url(./images/bg3.jpg); background-size:cover;" >
           <div class="d-block w-100 d-flex justify-content-center align-items-center imgsize ">
           <div class="carouselstyle">
              <h1>Vous ne cherchez pas une region specifique </h1> <br>
              <h3> et bien on vous suggere les meilleur bien dans les milleurs region de la kabylie </h3> <br><br><br>
              <div class="pubbtnhover"><a href="./index.php#suggestions" class="pubbtn">Nos suggestions</a></div>
          </div>
            </div>
         </div>
       </div>
       <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
         <i class="fa fa-caret-left sizerile"></i>
         <span class="sr-only">Précédent</span>
       </a>
       <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
       <i class="fa fa-caret-right sizerile"></i>
          <span class="sr-only">Suivant</span>
        </a>
     </div>
    </section>
    <!--recherche-->
    <section class="sec1" id="sec1">
        <div class="container " id="syletab">
        <!--text centrer -->
        <ul class="nav nav-tabs">
          <li class=" nonselect nav-item active"  ><a class=" nav-link active" style="font-weight: 600;"  href="#location" data-toggle="tab">Location</a></li>
          <li class=" nonselect nav-item"><a  class=" nav-link"  style="font-weight: 600;" href="#achat" data-toggle="tab">Achat</a></li>
        </ul>
       <div class="tab-content searchbox ">
          <div class="tab-pane active" id="location">
          
          <form action="" id="formsearch" method="post" > <!-- boutton de rechercche -->
            <div class="div-recherche-estime">
            <h3>Vouz-chercher a louer dans la kabylie</h3>
            <h5>Faite une recherhes des bien que on dispose dans la region que vous desiriez </h5>
            
            <input type="search" name="search" class="tizisearch" placeholder="Commune, Daira, Wilaya">
            <button type="submit" name="btn_search" class="btn_recherche"><i class="fas fa-search"></i></button>
                  <?php 
                      //    barre de recherche        
                      if(isset($_POST["btn_search"])){
                        
                        
                        
                        ?>
                        <meta http-equiv="refresh" content="0;url=./pages/location.php?search=<?php echo $_POST["search"]?>#search" />
                        <?php
                        
                      }
                  
                  ?>
            </div>
         </form>
          
          </div>
          <div class="tab-pane" id="achat">
          <form action="" id="formsearch" method="post" > <!-- boutton de rechercche -->
            <div class="div-recherche-estime" >
            <h3>Vouz-chercher a acheter dans la kabylie</h3>
            <h5>Faite une recherhes des bien que on dispose dans la region que vous desiriez </h5>
            <input type="search" name="search" class="tizisearch" placeholder="wilaya, Daira, Commune, Ex:Tizi-Ouzou">
            <button type="submit" name="btn_search" class="btn_recherche"><i class="fas fa-search"></i></button>
                  <?php 
                      //    barre de recherche        
                      if(isset($_POST["btn_search"])){
                        
                        
                        
                        ?>
                        <meta http-equiv="refresh" content="0;url=./pages/immobilier.php?search=<?php echo $_POST["search"]?>#search" />
                        <?php
                        
                      }
                  
                  ?>
            </div>
         </form>
          </div>
         
       </div>
            
        </div>
        <!-- section des suggestions --> 
    </section>
    <section class="sec2" id="suggestions">
      <div class="container">
        <div class="headsug">
          <h1 class="text-center text-uppercase font-weight-bold " >Nos suggestions</h1>
       </div>
       <div class="d-flex flex-wrap justify-content-center biensugbox ">
       <?php 
       $bienrep = $db->query('SELECT id,titre, daira, commune, lien_img FROM biens ORDER BY id desc LIMIT 0,8');
          

       while ($donne= $bienrep->fetch()){
       //affichage des biens les plus recents       
         echo('<div class="biensug" >
           <img src="./'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4>'.$donne['titre'].'</h4>
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].'</p>
          </div>
           <div class="linkdetail">
            <a href="./pages/detail.php?id='.$donne['id'].'" class="linkdetail">Voir Detail</a> 
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
      <script src="./js/bootstrap.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

     <!--ajouter a la fin pour que la page ce recharche plus rapidement-->
   </body>
</html>