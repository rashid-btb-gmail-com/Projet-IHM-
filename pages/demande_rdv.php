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
         <title>Vilavie- demande RDV  </title>
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
include_once("../includes/header.php");
//    connexion a la base de donnee  
$db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
<div class="demanderdv" id="rdvdem" >
    <div class="container h-100">
        <div class="deposeheader " >
         <h1> Vous Souhaitez Visiter Ce Bien Immobilier</h1>
         <h3>Remplissez Ce Formualaire Pour Prendere Un Rendez-Vous</h3>
        </div>
	 	<div class="d-flex justify-content-center h-100">
         <div class="blockformrdv">
          <div class="rdvform">
         	 <div >
				<div class="d-flex justify-content-center">
					
						<img src="../images/logo.png" class="brand_logo" alt="Logo">
					
                </div>
                <h2 class="titre_connexion">Demande de visit</h2>
			  <div class="d-flex justify-content-center form_container">
					<!--formulaire de demande de visit-->
                <form enctype="multipart/form-data" action="" method="post" class="form_inscription">
                        
                        
                        <div class="input-group mb-3">
                        <input type="text" name="client" class="form-control input_user" placeholder="Votre Nom et Prénom" required><br>
                        </div> 
                        <div class="input-group mb-3">
                        <input type="text" name="lieu" class="form-control input_user" placeholder="Adress du Rdv" required><br>
                        </div>                                            
                        <div class="input-group mb-3 datetime">
                        <input type="date" name="date" class="form-control input_user date"  required><br>
                        <input type="time" name="time" class="form-control input_user"  required><br>
                        </div>
                        
                        <div class="input-group mb-3">
                        <input type="submit" value="demander" class="btn login_btn" name="submit">
                        </div>
                        <?php
                         if(isset($_POST["submit"])){
                             //insersion dans la base de donné
                             $insert=$db->prepare('INSERT INTO demande_rdv VALUES(NULL,?,?,?,?)');
                             $insert->execute(array($_POST["client"],$_POST["lieu"],$_POST["date"],$_POST["time"]));
                         }
                         ?>
                </form>
				</div>
				</div>
              </div> 
		 
         
          </div>
         <!--titre photo et lieu du bien cliqué dessu-->
         <div class="bienrdv">
         <h3 class="titre_connexion">Le Bien selectioner</h3>
             <?php
             $detail_bien = $db->query('SELECT titre,commune,daira,lien_img FROM biens Where id="'.$_GET['id'].'"');
             $choisie = $detail_bien->fetch();
             echo('
             <div class="d-flex justify-content-center"> 
             <img class="imgrdv"src="../'. $choisie['lien_img'].'" alt="image du bien">
             </div>
             <div class="pointdetail">
             <h3>'.$choisie['titre'].'</h3>
             <p><b> Lieux : </b>'.$choisie['commune'].', '.$choisie['daira'].'</p>
             </div>
             ');
             $detail_bien->closeCursor();
             ?>
         </div>
         </div>
         </div>
       </div>
	</div>
</div>
<?php
  include_once("../includes/footer.php");
   ?>    
</body>
</html>