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
     <title>Connexion</title>
     <!--icon du site-->
     <link rel="icon" href="../images/icon/favicon.ico">
     <!--feuilles de style-->
     <link rel="stylesheet" href="../style/bootstrap.css">
     <link rel="stylesheet" href="../style/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
     <!--kidot de fodil-->
     <script src="https://kit.fontawesome.com/b811c1c09f.js" crossorigin="anonymous"></script>
     
 </head>

  <body>
    <?php
	
	include_once("../includes/header.php");
	
	$db=new PDO('mysql:host=localhost;dbname=vilavie','root','');
	
    ?> 
	<div id="fullconnex">
        <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					
						<img src="../images/logo.png" class="brand_logo" alt="Logo">
					
                </div>
                <h4 class="titre_connexion">Se connecter</h4>
				<div class="d-flex justify-content-center form_container">
					<form action="" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="Pseudo">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Mot de passe">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
				 		 <button type="submit" name="submit" class="btn login_btn">Connexion</button>
				   		</div>
					<!--**************************** php ******************************-->
					
					
					
					<?php 
					
					$_SESSION["url_prec"];
					if(isset($_POST["submit"])){
						$select=$db->query("SELECT * FROM clients");
						
						while($donnees=$select->fetch()){
						
							$verifpass=password_verify ( $_POST["password"] ,$donnees["password"]) ;

							if(($_POST["username"]==$donnees["username"])&&($verifpass)){
								$_SESSION["username"]=$donnees["username"];								
								$_SESSION["nom"]=$donnees["nom"];
								$_SESSION["prenom"]=$donnees["prenom"];
								$_SESSION["id"]=$donnees["id"];

								//redirection vers le lien			
								
									?>
									<meta http-equiv="refresh" content="0;url=<?php echo $_SESSION["url_prec"]; ?>" />
									<?php	
								
								
							}else{
								$t=false;
									
							}
						}
						echo("Pseudo ou mot de passe incorrect");
					}
					?>
					</form>
				</div>
				<div class="forgetconnex">
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
                    Vous n'avez pas de compte ?<a href="./inscription.php" class="ml-2">S'inscrire</a>
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
      <script src="../js/js.js"></script>
     <!--ajouter a la fin pour que la page ce recharche plus rapidement-->
   </body>
</html>