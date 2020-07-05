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
            
                  <li><a href="./pages/location.php">Locations</a></li>                  
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
              <div class="pubbtnhover"><a href="./pages/aboutus.php" class="pubbtn">A propos de nous</a></div>
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
            
            <input type="search" name="search" class="tizisearch" placeholder="Commune, Ex:Bini Zmenzer">
            <button type="submit" name="btn_search2" class="btn_recherche"><i class="fas fa-search"></i></button>
                  <?php 
                      //    barre de recherche        
                      if(isset($_POST["btn_search2"])){
                        
                        
                        
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
            <input type="search" name="search" class="tizisearch" placeholder="Commune, Ex:Ilmaten">
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
      <div class="container-fluid">
        <!--*****************   VENTE  *********************-->
        <div class="headsug">
          <h1 class="text-center text-uppercase font-weight-bold " >Nos suggestions </h1><hr class="text-center " width="200px"><br>
          <h1 class="text-center font-weight-bold border" style="border-radius:0.5em;" >"Vente"</h1> 
         
        </div>
       
        <h2 class=" headsug text-center "><i class="fa fa-home"></i> Nos Biens les plus recents</h2>
       <div class="d-flex flex-nowrap justify-content-center "> 
        
        <?php 
       $bienrep = $db->query('SELECT id,titre, daira, commune, wilaya, lien_img FROM biens ORDER BY id desc LIMIT 0,5');
          

       while ($donne= $bienrep->fetch()){
       //affichage des biens a vendre les plus recents       
         echo('<div class="biensug" ><a class="linkdetail" href="./pages/detail.php?id='.$donne['id'].'">
            <img src="./'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4 ">'.$donne['titre'].'</h4> 
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].','.$donne['wilaya'].'</p> 
          </div></a>       
          </div>');}
         $bienrep->closeCursor();
         ?>
                              
         </div>
         <h2 class=" headsug  text-center"><i class="fa fa-home"></i> Nos Biens A "TIZI-OUZOU"</h2>
       <div class="d-flex flex-nowrap justify-content-center  "> 
        
        <?php 
       $bienrep = $db->query('SELECT id,titre, daira, commune, wilaya, lien_img FROM biens WHERE wilaya="01-Tizi-Ouzou" ORDER BY id LIMIT 0,5');
          

       while ($donne= $bienrep->fetch()){
       //affichage des biens a vendre  tizi      
         echo('<div class="biensug" ><a class="linkdetail" href="./pages/detail.php?id='.$donne['id'].'">
            <img src="./'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4 ">'.$donne['titre'].'</h4> 
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].','.$donne['wilaya'].'</p> 
          </div></a>       
          </div>');}
         $bienrep->closeCursor();
         ?>
                              
         </div>
         <h2 class=" headsug  text-center "><i class="fa fa-home"></i> Nos bien a "BEJAIA"</h2>
       <div class="d-flex flex-nowrap justify-content-center "> 
        
        <?php 
       $bienrep = $db->query('SELECT id,titre, daira, commune, wilaya, lien_img FROM biens WHERE wilaya="02-Béjaïa" ORDER BY id LIMIT 0,5');
          

       while ($donne= $bienrep->fetch()){
       //affichage des biens a vendre   bejaia     
         echo('<div class="biensug" ><a class="linkdetail" href="./pages/detail.php?id='.$donne['id'].'">
            <img src="./'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4 ">'.$donne['titre'].'</h4> 
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].','.$donne['wilaya'].'</p> 
          </div></a>       
          </div>');}
         $bienrep->closeCursor();
         ?>
                              
         </div>
         <h2 class=" headsug  text-center"><i class="fa fa-home"></i> Nos Bien a "BOUIRA"</h2>
       <div class="d-flex flex-nowrap justify-content-center "> 
        
        <?php 
       $bienrep = $db->query('SELECT id,titre, daira, commune, wilaya, lien_img FROM biens WHERE wilaya="03-Bouira" ORDER BY id LIMIT 0,5');
          

       while ($donne= $bienrep->fetch()){
       //affichage des biens a vendre bouira
         echo('<div class="biensug" ><a class="linkdetail" href="./pages/detail.php?id='.$donne['id'].'">
            <img src="./'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4 ">'.$donne['titre'].'</h4> 
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].','.$donne['wilaya'].'</p> 
          </div></a>       
          </div>');}
         $bienrep->closeCursor();
         ?>
                              
         </div>
         <!--LOCATION-->
         <div class="headsug">
          <br>
          <h1 class="text-center font-weight-bold border" style="border-radius:0.5em;">"Location"</h1> 
          </div>
        
         <h2 class=" headsug text-center "><i class="fa fa-home"></i> Nos Biens les plus recents </h2>
         
       <div class="d-flex flex-nowrap justify-content-center "> 
        
        <?php 
       $bienrep = $db->query('SELECT id,titre, daira, commune, wilaya, lien_img FROM biens_location ORDER BY id desc LIMIT 0,5');
          

       while ($donne= $bienrep->fetch()){
       //affichage des biens a louer les plus recents       
         echo('<div class="biensug" ><a class="linkdetail" href="./pages/detailloc.php?id='.$donne['id'].'">
            <img src="./'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4 ">'.$donne['titre'].'</h4> 
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].','.$donne['wilaya'].'</p> 
          </div></a>       
          </div>');}
         $bienrep->closeCursor();
         ?>
                              
         </div>
         <h2 class=" headsug  text-center"><i class="fa fa-home"></i> Nos Biens A "TIZI-OUZOU"</h2>
       <div class="d-flex flex-nowrap justify-content-center  "> 
        
        <?php 
       $bienrep = $db->query('SELECT id,titre, daira, commune, wilaya, lien_img FROM biens_location WHERE wilaya="01-Tizi-Ouzou" ORDER BY id LIMIT 0,5');
          

       while ($donne= $bienrep->fetch()){
       //affichage des biens alouer a tizi    
         echo('<div class="biensug" ><a class="linkdetail" href="./pages/detailloc.php?id='.$donne['id'].'">
            <img src="./'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4 ">'.$donne['titre'].'</h4> 
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].','.$donne['wilaya'].'</p> 
          </div></a>       
          </div>');}
         $bienrep->closeCursor();
         ?>
                              
         </div>
         <h2 class=" headsug  text-center "><i class="fa fa-home"></i> Nos bien a "BEJAIA"</h2>
       <div class="d-flex flex-nowrap justify-content-center "> 
        
        <?php 
       $bienrep = $db->query('SELECT id,titre, daira, commune, wilaya, lien_img FROM biens_location WHERE wilaya="02-Béjaïa" ORDER BY id LIMIT 0,5');
          

       while ($donne= $bienrep->fetch()){
       //affichage des biens a louer a bejaia     
         echo('<div class="biensug" ><a class="linkdetail" href="./pages/detailloc.php?id='.$donne['id'].'">
            <img src="./'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4 ">'.$donne['titre'].'</h4> 
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].','.$donne['wilaya'].'</p> 
          </div></a>       
          </div>');}
         $bienrep->closeCursor();
         ?>
                              
         </div>
         <h2 class=" headsug  text-center"><i class="fa fa-home"></i> Nos Bien a "BOUIRA"</h2>
       <div class="d-flex flex-nowrap justify-content-center "> 
        
        <?php 
       $bienrep = $db->query('SELECT id,titre, daira, commune, wilaya, lien_img FROM biens_location WHERE wilaya="03-Bouira" ORDER BY id LIMIT 0,5');
          

       while ($donne= $bienrep->fetch()){
       //affichage des biens a louer a bouira      
         echo('<div class="biensug" ><a class="linkdetail" href="./pages/detailloc.php?id='.$donne['id'].'">
            <img src="./'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4 ">'.$donne['titre'].'</h4> 
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].','.$donne['wilaya'].'</p> 
          </div></a>       
          </div>');}
         $bienrep->closeCursor();
         ?>
                              
         </div>
      </div>  
                
    </section>
    <section class="container-fluid " style="margin-bottom: 30px; margin-top: 30px;">
    <div class="headsug">
          <h1 class="text-center text-uppercase font-weight-bold " >Recherche Rapide </h1><hr class="text-center " width="200px"><br>
     </div>
     <div class="d-flex flex-nowrap justify-content-center">
       <div>
         <h3 class="headsug">TIZI-OUZOU</h3>
         <div class="d-flex flex-nowrap">
           <div class="stylelienrap d-flex flex-column" style="padding: 6px;">
             <p style="color:orange; font-size:1.5rem;">Vente</p>
            
             <a href="./pages/immobilier.php?daira=20-Tizi%20Ouzou">Daira de Tizi-Ouzou</a>
             <a href="./pages/immobilier.php?daira=09-Draâ%20El%20Mizan">Daira de Draâ El Mizan</a>
             <a href="./pages/immobilier.php?daira=08-Draâ%20Ben%20Khedda">Daira de Draâ Ben Khedda</a>
             <a href="./pages/immobilier.php?daira=02-Azazga">Daira de Azazga</a>
             <a href="./pages/immobilier.php?daira=06-Boghni">Daira de Boghni</a>
             <a href="./pages/immobilier.php?daira=17-Ouaguenoun">Daira de Ouaguenoun</a>
             <a href="./pages/immobilier.php?daira=16-Ouadhia">Daira de Ouadhia</a>
             <a href="./pages/immobilier.php?daira=01-Ain%20El%20Hammam">Daira de Ain El Hammam</a>
             <a href="./pages/immobilier.php?daira=07-Bouzeguène">Daira de Bouzeguène</a>
             <a href="./pages/immobilier.php?daira=04-Beni%20Douala">Daira de Beni Douala</a>
             <a href="./pages/immobilier.php?daira=19-Tizi%20Gheniff">Daira de Tizi Gheniff</a>
             <a href="./pages/immobilier.php?daira=11-Larbaâ%20Nath%20Irathen">Daira de Larbaâ Nath Irathen</a>
             <a href="./pages/immobilier.php?daira=12-Mâatkas">Daira de Mâatkas</a>
             <a href="./pages/immobilier.php?daira=14-Mekla">Daira de Mekla</a>
             <a href="./pages/immobilier.php?daira=13-Makouda">Daira de Makouda</a>
             <a href="./pages/immobilier.php?daira=03-Azeffoun">Daira de Azeffoun</a>
             <a href="./pages/immobilier.php?daira=18-Tigzirt">D%20aira de Tigzirt</a>
             <a href="./pages/immobilier.php?daira=10-Iferhounène">Daira de Iferhounène</a>
             <a href="./pages/immobilier.php?daira=21-Tizi%20Rached">Daira de Tizi Rached</a>
             <a href="./pages/immobilier.php?daira=15-Ouacif">Daira de Ouacif</a>
             <a href="./pages/immobilier.php?daira=05-Beni%20Yenni">Daira de Beni Yenni</a>
             
             
            </div>
           <div class="stylelienrap d-flex flex-column" style="padding: 6px;">
           <p style="color:orange; font-size:1.5rem;">location</p>
           <a href="./pages/location.php?daira=20-Tizi%20Ouzou">Daira de Tizi-Ouzou</a>
             <a href="./pages/location.php?daira=09-Draâ%20El%20Mizan">Daira de Draâ El Mizan</a>
             <a href="./pages/location.php?daira=08-Draâ%20Ben%20Khedda">Daira de Draâ Ben Khedda</a>
             <a href="./pages/location.php?daira=02-Azazga">Daira de Azazga</a>
             <a href="./pages/location.php?daira=06-Boghni">Daira de Boghni</a>
             <a href="./pages/location.php?daira=17-Ouaguenoun">Daira de Ouaguenoun</a>
             <a href="./pages/location.php?daira=16-Ouadhia">Daira de Ouadhia</a>
             <a href="./pages/location.php?daira=01-Ain%20El%20Hammam">Daira de Ain El Hammam</a>
             <a href="./pages/location.php?daira=07-Bouzeguène">Daira de Bouzeguène</a>
             <a href="./pages/location.php?daira=04-Beni%20Douala">Daira de Beni Douala</a>
             <a href="./pages/location.php?daira=19-Tizi%20Gheniff">Daira de Tizi Gheniff</a>
             <a href="./pages/location.php?daira=11-Larbaâ%20Nath%20Irathen">Daira de Larbaâ Nath Irathen</a>
             <a href="./pages/location.php?daira=12-Mâatkas">Daira de Mâatkas</a>
             <a href="./pages/location.php?daira=14-Mekla">Daira de Mekla</a>
             <a href="./pages/location.php?daira=13-Makouda">Daira de Makouda</a>
             <a href="./pages/location.php?daira=03-Azeffoun">Daira de Azeffoun</a>
             <a href="./pages/location.php?daira=18-Tigzirt">Daira de Tigzirt</a>
             <a href="./pages/location.php?daira=10-Iferhounène">Daira de Iferhounène</a>
             <a href="./pages/location.php?daira=21-Tizi%20Rached">Daira de Tizi Rached</a>
             <a href="./pages/location.php?daira=15-Ouacif">Daira de Ouacif</a>
             <a href="./pages/location.php?daira=05-Beni%20Yenni">Daira de Beni Yenni</a>
           </div>
           <div style="border:1px solid orange; height:550px; margin-left:10px; margin-right:20px;;"  ></div>
         </div>
       </div>
        <div>
        <h3 class="headsug">BEJAIA</h3>
        <div class="d-flex flex-nowrap">
        <div class="stylelienrap d-flex flex-column" style="padding: 6px;" >
        <p style="color:orange; font-size:1.5rem;">Vente</p>
            
            <a href="./pages/immobilier.php?daira=15-Sidi-Aïch">Daira de Sidi-Aïch</a>
            <a href="./pages/immobilier.php?daira=01-Adekar">Daira de Adekar</a>
            <a href="./pages/immobilier.php?daira=14-Seddouk">Daira de Seddouk</a>
            <a href="./pages/immobilier.php?daira=07-Beni%20Maouchea">Daira de Beni Maouchea</a>
            <a href="./pages/immobilier.php?daira=12-Kherrata">Daira de Kherrata</a>
            <a href="./pages/immobilier.php?daira=17-Tazmalt">Daira de Tazmalt</a>
            <a href="./pages/immobilier.php?daira=02-Akbou">Daira de Akbou</a>
            <a href="./pages/immobilier.php?daira=16-Souk%20El-Ténine">Daira de Souk El-Ténine</a>
            <a href="./pages/immobilier.php?daira=13-Ouzellaguen">Daira de Ouzellaguen</a>
            <a href="./pages/immobilier.php?daira=05-Barbacha">Daira de Barbacha</a>
            <a href="./pages/immobilier.php?daira=03-Amizour">Daira de Amizourf</a>
            <a href="./pages/immobilier.php?daira=06-Béjaïa">Daira de Béjaïa</a>
            <a href="./pages/immobilier.php?daira=10-El%20Kseur">Daira de El Kseur</a>
            <a href="./pages/immobilier.php?daira=18-Tichy">Daira de Tichy</a>
            <a href="./pages/immobilier.php?daira=08-Cheminia">Daira de Cheminia</a>
            <a href="./pages/immobilier.php?daira=11-Ighil%20Ali">Daira de Ighil Ali</a>
            <a href="./pages/immobilier.php?daira=19-Timezrit">Daira de Timezrit</a>
            <a href="./pages/immobilier.php?daira=04-Aokas">Daira de Aokas</a>
            <a href="./pages/immobilier.php?daira=09-Darguina">Daira de Darguina</a>
            
            

        </div>
        <div class="stylelienrap d-flex flex-column" style="padding:6px;">
        <p style="color:orange; font-size:1.5rem;">location</p>
        <a href="./pages/location.php?daira=15-Sidi-Aïch">Daira de Sidi-Aïch</a>
            <a href="./pages/location.php?daira=01-Adekar">Daira de Adekar</a>
            <a href="./pages/location.php?daira=14-Seddouk">Daira de Seddouk</a>
            <a href="./pages/location.php?daira=07-Beni%20Maouchea">Daira de Beni Maouchea</a>
            <a href="./pages/location.php?daira=12-Kherrata">Daira de Kherrata</a>
            <a href="./pages/locationr.php?daira=17-Tazmalt">Daira de Tazmalt</a>
            <a href="./pages/location.php?daira=02-Akbou">Daira de Akbou</a>
            <a href="./pages/location.php?daira=16-Souk%20El-Ténine">Daira de Souk El-Ténine</a>
            <a href="./pages/location.php?daira=13-Ouzellaguen">Daira de Ouzellaguen</a>
            <a href="./pages/location.php?daira=05-Barbacha">Daira de Barbacha</a>
            <a href="./pages/location.php?daira=03-Amizour">Daira de Amizourf</a>
            <a href="./pages/location.php?daira=06-Béjaïa">Daira de Béjaïa</a>
            <a href="./pages/location.php?daira=10-El%20Kseur">Daira de El Kseur</a>
            <a href="./pages/location.php?daira=18-Tichy">Daira de Tichy</a>
            <a href="./pages/location.php?daira=08-Cheminia">Daira de Cheminia</a>
            <a href="./pages/location.php?daira=11-Ighil%20Ali">Daira de Ighil Ali</a>
            <a href="./pages/location.php?daira=19-Timezrit">Daira de Timezrit</a>
            <a href="./pages/location.php?daira=04-Aokas">Daira de Aokas</a>
            <a href="./pages/location.php?daira=09-Darguina">Daira de Darguina</a>
         </div>
         <div style="border:1px solid orange; height:550px; margin-left:10px; margin-right:20px;"  ></div>
         </div>
       </div >
       <div >
       <h3 class="headsug">BOUIRA</h3>
       <div class="  d-flex flex-nowrap">
       <div class=" stylelienrap d-flex flex-column" style="padding: 6px;">
       <p style="color:orange; font-size:1.5rem;">Vente</p>
       
            
            <a href="./pages/immobilier.php?daira=01-Bouira">Daira de Bouira</a>
            <a href="./pages/immobilier.php?daira=02-Haizer">Daira de Haizer </a>
            <a href="./pages/immobilier.php?daira=07-Bir%20Ghbalou">Daira de Bir Ghbalou</a>
            <a href="./pages/immobilier.php?daira=11-Sour%20El-Ghozlane">Daira de Sour El-Ghozlane</a>
            <a href="./pages/immobilier.php?daira=08-Aïn%20Bessem">Daira de Aïn Bessem</a>
            <a href="./pages/immobilier.php?daira=04-M'Chedallah">Daira de M'Chedallah</a>
            <a href="./pages/immobilier.php?daira=09-Souk%20El%20Khemis">Daira de Souk El Khemis</a>
            <a href="./pages/immobilier.php?daira=03-Bechloul">Daira de Bechloul</a>
            <a href="./pages/immobilier.php?daira=06-Lakhdaria">Daira de Lakhdaria</a>
            <a href="./pages/immobilier.php?daira=10-El%20Hachimia">Daira de El Hachimia</a>
            <a href="./pages/immobilier.php?daira=12-Bordj%20Okhriss">Daira de Bordj Okhriss</a>
            <a href="./pages/immobilier.php?daira=05-Kadiria">Daira de Kadiri</a>
            
            
          </div>
          <div class="stylelienrap d-flex flex-column" style="padding: 6px;">
          <p style="color:orange; font-size:1.5rem;">location</p>
          <a href="./pages/location.php?daira=01-Bouira">Daira de Bouira</a>
            <a href="./pages/location.php?daira=02-Haizer">Daira de Haizer </a>
            <a href="./pages/location.php?daira=07-Bir%20Ghbalou">Daira de Bir Ghbalou</a>
            <a href="./pages/location.php?daira=11-Sour%20El-Ghozlane">Daira de Sour El-Ghozlane</a>
            <a href="./pages/location.php?daira=08-Aïn%20Bessem">Daira de Aïn Bessem</a>
            <a href="./pages/location.php?daira=04-M'Chedallah">Daira de M'Chedallah</a>
            <a href="./pages/location.php?daira=09-Souk%20El%20Khemis">Daira de Souk El Khemis</a>
            <a href="./pages/location.php?daira=03-Bechloul">Daira de Bechloul</a>
            <a href="./pages/location.php?daira=06-Lakhdaria">Daira de Lakhdaria</a>
            <a href="./pages/location.php?daira=10-El%20Hachimia">Daira de El Hachimia</a>
            <a href="./pages/location.php?daira=12-Bordj%20Okhriss">Daira de Bordj Okhriss</a>
            <a href="./pages/location.php?daira=05-Kadiria">Daira de Kadiri</a>
         </div>
         
         </div>
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
              <?php
              if(isset($_SESSION["username"])){
                  echo('<h5 class="titrelink"> Nos Services</h5>
                  <a href="./pages/servicedem.php">Déménagement</a>');
              }else{
                echo('<h5 class="titrelink"> Devenez client</h5>
                <a href="./pages/inscription.php">Inscrivez-Vous</a>');
              }
              
               ?>
              </div>
              <div class="onelinkfoot">
              <h5 class="titrelink">Des questions!</h5>
              <a href="./pages/contact.php">Contactez-Nous</a>   
              <a href="./pages/aboutus.php">A Propos De Nous</a>

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