<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion Administrateur</title>
</head>
<body>
    <?php
        session_start();
            $_SESSION["nom_admin"]="";
            $_SESSION["psw_admin"]="";
    ?>


    
  <div class="fulladmin">
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
							<input type="text" name="nom_admin" class="form-control input_user"  placeholder="Nom de l'administrateur">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="psw_admin" class="form-control input_pass"  placeholder="Mot de passe">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Se souvenir de moi </label>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
				 		<button type="submit" name="submit" class="btn login_btn">Connexion</button>
				   		</div>
                           
					    <!--**************************** php ******************************-->
                        <?php  
        if(isset($_POST["submit"])){
            if(isset($_POST["nom_admin"])&&(isset($_POST["psw_admin"]))){
                if(($_POST["nom_admin"]=="user")&&($_POST["psw_admin"]=="1234")){
                    
                    $_SESSION["nom_admin"]="user";
                    $_SESSION["psw_admin"]="1234";
                    header("location: ./plateforme_admin.php");
                }
                else ?> <h3>Mot de passe incorect ! </h3> <?php
            }
        }
        ?>
					</form>
				</div>
		
				
			</div>
		</div>
	</div>
	<div>
</body>
</html>