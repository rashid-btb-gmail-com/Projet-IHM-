


<!DOCTYPE html>
<html lang="fr">
<head>
         <!--les metas necessaire-->
         <meta charset="UTF-8">
         <meta name="description" content="Un site de vente d'apartement, villa et studio pour la wilaya 
         de tizi ouzou ">
         <meta name="keywords" content="tizi-ouzou,vente,appartement,maison,villa,algerie">
         <meta name="viewport" content="width=width-device, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <!--le titre-->
         <title>Vilavie- immobilier  </title>
         <!--icon du site-->
         <link rel="icon" href="../images/icon/favicon.ico">
         <!--feuilles de style-->
         <link rel="stylesheet" href="../style/style.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
         <!--Scriptes-->
         <script type="text/javascript" src="./js/jQuery.js"></script>
         <script src="./js/jsscript.js"></script>
       </head>
<body>
<?php



$db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
include_once('../includes/header.php');


    
?>


<div class="fullimmo" id="immo">
           <div class="container h-100">
            <div class="d-flex-justify-content-center-h-100">
               
            <div class="text-center">
                              
                                        
                      <div class="row hidden-xs" id="recherche" style="margin-top: 15px;">                                                                 
                                  <img src="../images/logo.png" style="  margin-left: 11.6cm;">          
                          
                          <div class="noo-text-block" style="padding-left: 143px; margin-top: 27px;">
                                <form enctype="multipart/form-data" id="id_form" action="" method="post">
                                  <div class="row">
                                  <div class="form-group  col-sm-2 ">  
                                            <div class="form-group ">
                                              <label for="type_dairas" style="color: white;"><b>Daïras</b> </label>
                                              <SELECT id="daira" name="daira" class="form-control input_user" onchange="filtre_commune()" required>
                                                <option value="Daïras" disabled selected> Daïras</option>
                                                <option value="01-Ain El Hammam">01-Ain El Hammam</option>
                                                <option value="02-Azazga">02-Azazga</option>
                                                <option value="03-Azeffoun ">03-Azeffoun</option>
                                                <option value="04-Beni Douala">04-Beni Douala</option>
                                                <option value="05-Beni Yenni">05-Beni Yenni</option>
                                                <option value="06-Boghni">06-Boghni</option>
                                                <option value="07-Bouzguen">07-Bouzguen</option>
                                                <option value="08-Draâ Ben Khedda">08-Draâ Ben Khedda</option>
                                                <option value="09-Draâ El Mizan">09-Draâ El Mizan</option>
                                                <option value="10-Iferhounène">10-Iferhounène</option>
                                                <option value="11-Larbaâ Nath Irathen">11-Larbaâ Nath Irathen</option>
                                                <option value="12-Mâatkas">12-Mâatkas</option>
                                                <option value="13-Makouda">13-Makouda</option>
                                                <option value="14-Mekla">14-Mekla</option>
                                                <option value="15-Ouacif">15-Ouacif</option>
                                                <option value="16-Ouadhia">16-Ouadhia</option>
                                                <option value="17-Ouaguenoun">17-Ouaguenoun</option>
                                                <option value="18-Tigzirt">18-Tigzirt</option>
                                                <option value="19-Tizi Gheniff">19-Tizi Gheniff</option>
                                                <option value="20-Tizi Ouzou">20-Tizi Ouzou</option>
                                                <option value="21-Tizi Rached">21-Tizi Rached</option>
                                              </SELECT>
                                            </div>
                                </div>

                                <div class="form-group  col-sm-2">                    
                                    <div class="form-group"> 
                                            <label for="liste_commune" style="color: white;"><b>Commune</b> </label>
                                            <select class="form-control" id="commune" name="commune" >
                                             
                                            <option>Commune</option>
                                             <option value="Abi Youcef">Abi Youcef</option>
                                             <option value="Aghribs">Aghribs</option>
                                             <option value="Agouni Gueghrane">Agouni Gueghrane</option>
                                             <option value="Ain El Hammam">Ain El Hammam</option>
                                             <option value="Ain Zaouia">Aïn Zaouia</option>
                                             <option value="Ait Aggouacha">Aït Aggouacha</option>
                                             <option value="Mimoun">Aït Aïssa Mimoun</option>
                                             <option value="Ait Bouaddou">Aït Bouaddou</option>
                                             <option value="Ait Boumahdi">Aït Boumahdi</option>
                                             <option value="Ait Chafâa">Aït Chafâa</option>
                                             <option value="Ait Khellili">Aït Khellili</option>
                                             <option value="Ait Mahmoud">Aït Mahmoud</option>
                                             <option value="Ait Ouacif">Aït Ouacif</option>
                                             <option value="Ait Oumalou">Aït Oumalou</option>
                                             <option value="Ait Toudert">Aït Toudert</option>
                                             <option value="Ait Yahia">Aït Yahia</option>
                                             <option value="Ait Yahia Moussa">Aït Yahia Moussa</option>
                                             <option value="Ait Yenni">Aït Yenni</option>
                                             <option value="Ait Zmenzer">Aït Zmenzer</option>
                                             <option value="Akbil">Akbil</option>
                                             <option value="Akerrou">Akerrou</option>
                                             <option value="Assi Youcef">Assi Youcef</option>
                                             <option value="Ath Zikki">Ath Zikki</option>
                                             <option value="Azazga">Azazga</option>
                                             <option value="Azeffoun">Azeffoun</option>
                                             <option value="Beni Aïssi">Beni Aïssi</option>
                                             <option value="Beni Douala">Beni Douala</option>
                                             <option value="Boghni">Boghni</option>
                                             <option value="Boudjima">Boudjima</option>
                                             <option value="Bounouh">Bounouh</option>
                                             <option value="Bouzeguène">Bouzeguène</option>
                                             <option value="Draâ Ben Khedda">Draâ Ben Khedda</option>
                                             <option value="Draâ El Mizan">Draâ El Mizan</option>
                                             <option value="Freha">Freha</option>
                                             <option value="Frikats">Frikats</option>
                                             <option value="Iboudraren">Iboudraren</option>
                                             <option value="Idjeur">Idjeur</option>
                                             <option value="Iferhounène">Iferhounène</option>
                                             <option value="Ifigha">Ifigha</option>
                                             <option value="Iflissen">Iflissen</option>
                                             <option value="Illilten">Illilten</option>
                                             <option value="Illoula Oumalou">Illoula Oumalou</option>
                                             <option value="Imkiren">Imkiren</option>
                                             <option value="Imsouhel">Imsouhel</option>
                                             <option value="Irdjen">Irdjen</option>
                                             <option value="Larbaâ Nath Irathen">Larbaâ Nath Irathen</option>
                                             <option value="Mâatkas">Mâatkas</option>
                                             <option value="Makouda">Makouda</option>
                                             <option value="Mechtras">Mechtras</option>
                                             <option value="Mekla">Mekla</option>
                                             <option value="Mizrana">Mizrana</option>
                                             <option value="Ouadhia">Ouadhia</option>
                                             <option value="Ouaguenoun">Ouaguenoun</option>
                                             <option value="Sidi Namane">Sidi Namane</option>
                                             <option value="Souamaâ">Souamaâ</option>
                                             <option value="Souk El Thenine">Souk El Thenine</option>
                                             <option value="Tadmaït">Tadmaït</option>
                                             <option value="Tigzirt">Tigzirt</option>
                                             <option value="Timizart">Timizart</option>
                                             <option value="Tirmitine">Tirmitine</option>
                                             <option value="Tizi Gheniff">Tizi Gheniff</option>
                                             <option value="Tizi N'Tleta">Tizi N'Tleta</option>
                                             <option value="Tizi Ouzou">Tizi Ouzou</option>
                                             <option value="Tizi Rached">Tizi Rached</option>
                                             <option value="Yakouren">Yakouren</option>
                                             <option value="Yatafen">Yatafen</option>
                                             <option value="Zekri">Zekri</option>

                                        </select>

                                    </div>
                                </div>
                                
                                <div class="form-group  col-sm-2">                  
                      <div class="input-group"> 
                        <div class="form-group">
                        <label for="type_prix" style="color: white;"><b>Prix</b> </label>
                        <input id="prix" name="prix" type="number" class="form-control" onchange="valider('','')" placeholder="Prix MAX" value="" >
                        <span class="input-group-addon">DA</span>
                    </div>
                    </div>
                </div>
                           

                        <div class="form-group col-sm-2">
                      <div class="input-group"> 
                        <div class="form-group">
                            <label for="type_surface" style="color: white;"><b>Surface</b> </label>
                        <input id="surface" type="number" name="surface" class="form-control" onchange="valider('','')" placeholder="Surface MAX" value="">
                        <span class="input-group-addon1">M<sup>2</sup></span>
                        </div>
                    </div>  
                    </div>   


                                <div class="form-group col-sm-2">
                                <div class="form-group ">
                                    
                                    <input class="btn1" type="submit" name="formsend" value="Recherche">

                                </div>
                                                              
                          </div>

                          
                          </div>



                        
                      </form>                                  
          </div>
        
      </div>
  </div>
 
</div>
</div>
</div>
                    <!--*********   exposition des biens   ***********-->

        <section class="sec2" id="search">
        <div class="container">
        <div class="yep">
          <h1 class="text-center text-uppercase font-weight-bold " >Nos Biens</h1>
       </div>
       <div class="d-flex flex-wrap justify-content-center biensugbox ">
       <?php 
       

            //filtre a 4 cases


       if (isset($_POST['formsend'])) {
        
            if (isset($_POST['daira']) && (isset($_POST['commune'])) && (isset($_POST['prix'])) && (isset($_POST['surface']))) {
                $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens where daira = ? and commune = ? and prix <= ? and surface <= ?');
          $req->execute(array(
            $_POST['daira'],
            $_POST['commune'],
            $_POST['prix'],
            $_POST['surface']

          )
          );
            }

            // filtre a 3 cases
        if(isset($_POST['daira'])){  
          if (($_POST['daira']=='Daïras') && (isset($_POST['commune'])) && (isset($_POST['prix'])) && (isset($_POST['surface'])) ) {
              $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE commune=? AND prix<= ? AND surface<= ?');
              $req->execute(array($_POST['commune'],$_POST['prix'],$_POST['surface']));
          }
        }
        if (($_POST['commune']=='Commune') && (isset($_POST['daira'])) && (isset($_POST['prix'])) && (isset($_POST['surface'])) ) {
             $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE daira=? AND prix<=? AND surface<=?');
             $req->execute(array($_POST['daira'],$_POST['prix'],$_POST['surface']));
        }

        if (($_POST['prix']==null) && (isset($_POST['daira'])) && (isset($_POST['commune'])) && (isset($_POST['surface'])) ) {
             $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE daira=? AND commune=? AND surface<=?');
             $req->execute(array($_POST['daira'],$_POST['commune'],$_POST['surface']));
        }
        
        if (($_POST['surface']==null) && (isset($_POST['daira'])) && (isset($_POST['commune'])) && (isset($_POST['prix'])) ) {
             $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE daira=? AND commune=? AND prix<=?');
             $req->execute(array($_POST['daira'],$_POST['commune'],$_POST['prix']));
        }


        //filtre a 2 cases
        if(isset($_POST['daira'])){  
          if(($_POST['daira']=='Daïras')&&($_POST['prix']==null)&& (isset($_POST['commune']))&&(isset($_POST['surface']))){
                                            $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE commune<=? AND surface<=?');                    
                                            $req->execute(array($_POST['commune'],$_POST['surface']));
                                        }


            if(($_POST['daira']=='Daïras')&&($_POST['commune']=='Commune')&&(isset($_POST['prix'])) && (isset($_POST['surface'])) ){
                                            $req=$db->prepare("SELECT id,titre,daira,commune,lien_img FROM biens WHERE  prix<=? and surface<=?"); 
                                                               
                                            $req->execute(array($_POST['prix'],$_POST['surface']));
                                        } 

            if(($_POST['daira']=='Daïras')&&($_POST['surface']==null)&& (isset($_POST['commune']))&&(isset($_POST['prix']))){
                                            $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE commune=? AND prix<=?');                    
                                            $req->execute(array($_POST['commune'],$_POST['prix']));
                                        }

            if(($_POST['surface']==null)&&($_POST['prix']==null)&& (isset($_POST['commune']))&&(isset($_POST['daira']))){
                                            $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE commune=? AND daira=?');                    
                                            $req->execute(array($_POST['commune'],$_POST['daira']));
                                        }

            if(($_POST['commune']=='Commune')&&($_POST['prix']==null)&& (isset($_POST['surface']))&&(isset($_POST['daira']))){
                                            $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE surface<=? AND daira=?');                    
                                            $req->execute(array($_POST['surface'],$_POST['daira']));
                                        } 


            if(($_POST['surface']==null)&&($_POST['commune']=='Commune')&& (isset($_POST['prix']))&&(isset($_POST['daira']))){
                                            $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE prix<=? AND daira=?');                    
                                            $req->execute(array($_POST['prix'],$_POST['daira']));
                                        }  
                                      }


        //filtre a 1 case

        if(isset($_POST['daira'])){                              
            if(($_POST['surface']==null)&&($_POST['commune']=='Commune')&& ($_POST['prix']==null)&&(isset($_POST['daira']))){
                                            $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE  daira=?');                    
                                            $req->execute(array($_POST['daira']));
                                        }
            

                                        

            if(($_POST['surface']==null)&&($_POST['daira']=='Daïras')&& ($_POST['prix']==null)&&(isset($_POST['commune']))){
                                            $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE  commune=?');                    
                                            $req->execute(array($_POST['commune']));
                                        }
            

            if(($_POST['surface']==null)&&($_POST['daira']=='Daïras')&& ($_POST['commune']=='Commune')&&(isset($_POST['prix']))){
                                            $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE  prix<=?');                    
                                            $req->execute(array($_POST['prix']));
                                        }


            if(($_POST['commune']=='Commune')&&($_POST['daira']=='Daïras')&& ($_POST['prix']==null)&&(isset($_POST['surface']))){
                                            $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens WHERE  surface<=?');                    
                                            $req->execute(array($_POST['surface']));
                                        }
                                      }

            
          
          if(isset($req)){  
            while ($donne= $req->fetch()){
              //affichage des biens aprés recherche
              
            echo(' <div class="biensug" >
                  <img src="../'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
                  <div class="infobien">
                  <h4>'.$donne['titre'].'</h4>
                  <p>Lieu:'.$donne['commune'].','.$donne['daira'].'</p>
                  </div>
                  <div class="linkdetail">
                  <a href="../pages/detail.php?id='.$donne['id'].'" class="linkdetail">Voir Detail</a> 
                  </div>
                  </div>');
              
            
            }
            
            
          $req->closeCursor();
            
        }
      }

      else {
        
      
       $req = $db->query('SELECT id,titre, daira, commune, lien_img FROM biens ORDER BY id desc LIMIT 0,12');
       if(isset($_GET["search"])){
        $req = $db->prepare('SELECT * FROM biens WHERE commune LIKE ? ');
        $req->execute(array($_GET["search"]));
        
      }
       while ($donne= $req->fetch()){
       //affichage des biens les plus recents       
         echo('<div class="biensug" >
           <img src="../'.$donne['lien_img'].'" class="imgbien" alt="l\'image du bien" >
           <div class="infobien">
           <h4>'.$donne['titre'].'</h4>
           <p>Lieu:'.$donne['commune'].','.$donne['daira'].'</p>
          </div>
           <div class="linkdetail">
            <a href="../pages/detail.php?id='.$donne['id'].'" class="linkdetail">Voir Detail</a> 
            </div>
         </div>');}
         $req->closeCursor();

     }
         ?>
           
         </div>
      </div>
      </section>   

 <?php
  include_once("../includes/footer.php");
   ?>


</body>
</html>











