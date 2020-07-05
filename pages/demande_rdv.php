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
if(!isset($_SESSION["username"])){
    header("location: ./connexion.php#fullconnex");
}
$t=$_GET['d'];
if($t=='location'){$raison="location";}else {$raison="Achat";}
$nompre=$_SESSION["nom"].' '.$_SESSION["prenom"];
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
                        
                        
                        <div class="input-group mb-3 d-flex justify-content-center">
                        <h4 class="titre_connexion "><?php echo($nompre)?></h4>
                        <br>
                        </div> 
                        <div class="input-group mb-3">
                        <SELECT name="lieu" class="form-control input_user" placeholder="Adress du Rdv" required>
                                <option value="" disabled selected> Adress du RDV</option>
                                <option value="A l'agence ">A l'agence de vilavie</option>
                                <option value="A proximité du bien">A proximité du bien</option>
                        </SELECT>
                        <br>
                        </div> 
                        <span class="warning">Heur de visite entre 8h-18h</span>                                           
                        <div class="input-group mb-3 datetime">
                        <input type="date" name="date" class="form-control input_user date" min="<?php $date=date('Y-m-d', strtotime(' +1 day')); echo($date); ?>" required><br>
                        <input type="time" name="time" class="form-control input_user"  min="08:00" max="18:00"  required><br>
                        </div>

                        
                        <div class="input-group mb-3">
                        <input type="submit" value="demander" class="btn login_btn" name="submit">
                        </div>
                        <?php
                         
                         if(isset($_POST["submit"])){
                             $id=$_SESSION["id"];
                             $id_bien=$_GET['id'];
                            ?>
                            <script> alert("Votre RDV Sera pris en compte"); </script>
                            
                            <?php
                             //insersion dans la base de donné
                             $insert=$db->prepare('INSERT INTO demande_rdv VALUES(NULL,?,?,?,?,?,?,?)');
                             $insert->execute(array($nompre,$_POST["lieu"],$_POST["date"],$_POST["time"],$raison,$id,$id_bien));
                          if($raison=='location'){
                              
                              echo('<meta http-equiv="refresh" content="0;url=./location.php" />');
                             
                          }else {  echo('<meta http-equiv="refresh" content="0;url=./immobilier.php" />'); }
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
             if(($raison=='location')){
                $detail_bien = $db->query('SELECT adresse, wilaya, titre,commune,daira,lien_img FROM biens_location Where id="'.$_GET['id'].'"');
                }else {
                    $detail_bien = $db->query('SELECT adresse, wilaya, titre,commune,daira,lien_img FROM biens Where id="'.$_GET['id'].'"');
                }           
             
             $choisie = $detail_bien->fetch();
             echo('
             <div class="d-flex justify-content-center"> 
             <img class="imgrdv"src="../'. $choisie['lien_img'].'" alt="image du bien">
             </div>
             <div class="pointdetail2">
             <h3>'.$choisie['titre'].'</h3>
             <p><b> Lieux : </b>'.$choisie['adresse'].', '.$choisie['commune'].', '.$choisie['daira'].', '.$choisie['wilaya'].'</p> 
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