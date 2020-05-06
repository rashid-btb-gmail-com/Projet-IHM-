


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
            <div class="d-flex justify-content-center h-100">
               
            <div class="text-center">
                              
                                        
                      <div class="row hidden-xs" id="recherche" style="margin-top: 15px;">                                                                 
                                  <img src="../images/logo.png" style="  margin-left: 12.16cm;">          
                          
                          <div class="noo-text-block" style="padding-left: 143px; margin-top: 27px;">
                                <form enctype="multipart/form-data" id="id_form" action="" method="post">
                                  <div class="row">
                                  <div class="form-group  col-sm-2 ">  
                                            <div class="form-group ">
                                              <label for="type_dairas" style="color: white;"><b>Daïras</b> </label>
                                              <select class="form-control" id="daira" name="daira">                                                                                                                     
                                              <option>Daïras</option>
                         <option value="1">Ain El Hammam</option>
                         <option value="2">Azazga</option>
                         <option value="3">Azeffoun</option>
                         <option value="4">Beni Douala</option>
                         <option value="5">Beni Yenni</option>
                         <option value="6">Boghni</option>
                         <option value="7">Bouzguen</option>
                         <option value="8">Draâ Ben Khedda</option>
                         <option value="9">Draâ El Mizan</option>
                         <option value="10">Iferhounène</option>
                         <option value="11">Larbaâ Nath Irathen</option>
                         <option value="12">Mâatkas</option>
                         <option value="13">Makouda</option>
                         <option value="14">Mekla</option>
                         <option value="15">Ouacif</option>
                         <option value="16">Ouadhia</option>
                         <option value="17">Ouaguenoun</option>
                         <option value="18">Tigzirt</option>
                         <option value="19">Tizi Gheniff</option>
                         <option value="20">Tizi Ouzou</option>
                         <option value="21">Tizi Rached</option>
                                              
                                     </select>
                                            </div>
                                </div>
                                
                                <div class="form-group  col-sm-2">                  
                      <div class="input-group"> 
                        <div class="form-group">
                        <label for="type_prix" style="color: white;"><b>Prix</b> </label>
                        <input id="prix" name="prix" type="number" class="form-control" onchange="valider('','')" placeholder="Prix max" value="" required>
                        <span class="input-group-addon">DA</span>
                    </div>
                    </div>
                </div>
                           

                        <div class="form-group col-sm-2">
                      <div class="input-group"> 
                        <div class="form-group">
                            <label for="type_surface" style="color: white;"><b>Surface</b> </label>
                        <input id="surface" type="number" name="surface" class="form-control" onchange="valider('','')" placeholder="Surface min" value="">
                        <span class="input-group-addon1">m<sup>2</sup></span>
                        </div>
                    </div>  
                    </div>   




                                
                                 <div class="form-group  col-sm-2">                    
                                    <div class="form-group"> 
                                            <label for="liste_commune" style="color: white;"><b>Commune</b> </label>
                                            <select class="form-control" id="commune" name="commune" >
                                             
                                              <option>Commune</option>
                                             <option value="1">Abi Youcef</option>
                                             <option value="2">Aghribs</option>
                                             <option value="3">Agouni Gueghrane</option>
                                             <option value="4">Ain El Hammam</option>
                                             <option value="5">Aïn Zaouia</option>
                                             <option value="6">Aït Aggouacha</option>
                                             <option value="7">Aït Aïssa Mimoun</option>
                                             <option value="8">Aït Bouaddou</option>
                                             <option value="9">Aït Boumahdi</option>
                                             <option value="10">Aït Chafâa</option>
                                             <option value="11">Aït Khellili</option>
                                             <option value="12">Aït Mahmoud</option>
                                             <option value="13">Aït Ouacif</option>
                                             <option value="14">Aït Oumalou</option>
                                             <option value="15">Aït Toudert</option>
                                             <option value="16">Aït Yahia</option>
                                             <option value="17">Aït Yahia Moussa</option>
                                             <option value="18">Aït Yenni</option>
                                             <option value="19">Aït Zmenzer</option>
                                             <option value="20">Akbil</option>
                                             <option value="21">Akerrou</option>
                                             <option value="22">Assi Youcef</option>
                                             <option value="23">Ath Zikki</option>
                                             <option value="24">Azazga</option>
                                             <option value="25">Azeffoun</option>
                                             <option value="26">Beni Aïssi</option>
                                             <option value="27">Beni Douala</option>
                                             <option value="28">Boghni</option>
                                             <option value="29">Boudjima</option>
                                             <option value="30">3Bounouh</option>
                                             <option value="31">Bouzeguène</option>
                                             <option value="32">Draâ Ben Khedda</option>
                                             <option value="33">Draâ El Mizan</option>
                                             <option value="34">Freha</option>
                                             <option value="35">Frikats</option>
                                             <option value="36">Iboudraren</option>
                                             <option value="37">Idjeur</option>
                                             <option value="38">Iferhounène</option>
                                             <option value="39">Ifigha</option>
                                             <option value="40">Iflissen</option>
                                             <option value="41">Illilten</option>
                                             <option value="42">Illoula Oumalou</option>
                                             <option value="43">Imkiren</option>
                                             <option value="44">Imsouhel</option>
                                             <option value="45">Irdjen</option>
                                             <option value="46">Larbaâ Nath Irathen</option>
                                             <option value="47">Mâatkas</option>
                                             <option value="48">Makouda</option>
                                             <option value="49">Mechtras</option>
                                             <option value="50">Mekla</option>
                                             <option value="51">Mizrana</option>
                                             <option value="52">Ouadhia</option>
                                             <option value="53">Ouaguenoun</option>
                                             <option value="54">Sidi Namane</option>
                                             <option value="55">Souamaâ</option>
                                             <option value="56">Souk El Thenine</option>
                                             <option value="57">Tadmaït</option>
                                             <option value="58">Tigzirt</option>
                                             <option value="59">Timizart</option>
                                             <option value="60">Tirmitine</option>
                                             <option value="61">Tizi Gheniff</option>
                                             <option value="62">Tizi N'Tleta</option>
                                             <option value="63">Tizi Ouzou</option>
                                             <option value="64">Tizi Rached</option>
                                             <option value="65">Yakouren</option>
                                             <option value="66">Yatafen</option>
                                             <option value="67">Zekri</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="form-group col-sm-2">
                                <div class="form-group ">
                                    
                                    <button class="btn1" type="button" name="formsend">Recherche</button>

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

        <section class="sec2">
        <div class="container">
        <div class="yep">
          <h1 class="text-center text-uppercase font-weight-bold " >Nos Biens</h1>
       </div>
       <div class="d-flex flex-wrap justify-content-center biensugbox ">
       <?php 
       

       if (isset($_POST['formsend'])&& !empty($_POST['formsend'])) {
          

          $req=$db->prepare('SELECT id,titre,daira,commune,lien_img FROM biens where daira = ? and commune = ? and prix = ? and surface = ? order by id');
          $req->execute(array(
            'daira' => $_GET|$_POST['daira'],
            'commune'=> $_GET|$_POST['commune'],
            'prix'=> $_GET|$_POST['prix'],
            'surface'=> $_GET|$_POST['surface'],

          )
          );

          while ($donne= $req->fetch()){
             //affichage des biens aprés recherche
         echo('<div class="biensug" >
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





      else {
          
      
       $req = $db->query('SELECT id,titre, daira, commune, lien_img FROM biens ORDER BY id desc LIMIT 0,8');
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











