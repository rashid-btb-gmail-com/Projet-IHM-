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
         <title>Vilavie- Demenagement  </title>
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
$idcl=$_SESSION["id"];
?>
<div class="demanderdv2" id="rdvdem" >
    <div class="container h-100" style="margin-top: 80px;">
        <div class="deposeheader " >
         <h1 class="text-center" > Service de Déménagement</h1>
         <h3 class="text-center">Remplissez Ce Formualaire </h3>
        </div>
	 	<div class="d-flex justify-content-center h-100">
         <div class="blockformrdv">
          <div class="rdvform">
         	 <div >
				<div class="d-flex justify-content-center">
					
						<img src="../images/logo.png" class="brand_logo" alt="Logo">
					
                </div>
                
			  <div class="d-flex justify-content-center form_container">
					<!--formulaire de demande de visit-->
                <form enctype="multipart/form-data" action="" method="post" class="form_inscription">
                        
                        
                        
                        
                        
                                                                  
                        <div class="input-group mb-3 datetime">
                        <input type="date" name="date" class="form-control input_user date" min="<?php $date=date('Y-m-d', strtotime(' +3 day')); echo($date); ?>" required><br>
                        </div>
                        
                        <div class="input-group mb-3">
                        <input type="text" name="lieu" class="form-control input_user date" placeholder="adresse" required><br>
                        <br></div> 

                        <div class="input-group mb-3">
                        <input type="submit" value="Demander RDV" class="btn login_btn" name="submit">
                        </div>
                        <?php
                         
                         if(isset($_POST["submit"])){
                            ?>
                            <script> alert("Votre demande Sera pris en compte"); </script>
                            
                            <?php
                             //insersion dans la base de donné
                             $insert=$db->prepare('INSERT INTO demande_rdv_dem VALUES(NULL,?,?,?)');
                             $insert->execute(array($_POST["lieu"],$_POST["date"],$idcl));
                          
                              echo('<meta http-equiv="refresh" content="0;url=../index.php" />');
                             
                         
                         }

                         ?>
                </form>
				</div>
				</div>
              </div> 
		 
         
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