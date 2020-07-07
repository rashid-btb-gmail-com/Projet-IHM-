
<?php
$titre_page="Inscription";
include_once("../includes/header.php");
//    connexion a la base de donnee  
$db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//**************************   declaration des fonctions   **************** */



?>


    




  <div class="fullinscri" id="inscript">
    <div class="container h-100">
       <div class="deposeheader" >
         <h1> Inscrivez-Vous </h1>
         
        </div>
		<div class="d-flex justify-content-center h-100">
			<div class="user_card" id="user_card_insc">
				<div class="d-flex justify-content-center">
					
						<img src="../images/logo.png" class="brand_logo" alt="Logo">
					
                </div>
               
				<div class="d-flex justify-content-center form_container" >
					
                <form action="" method="post" onsubmit="return verifier_champs()" id="form_container_insc">
                <!--nom-->
                    <div class="input-group mb-3">
                        <input class="form-control input_user" type="text" name="nom" placeholder="Nom" required onchange="verifier_champs()">                                  <span class="controle" id="etat_nom" ></span><br>
                    </div>
                    <span id="msg_nom" class="msg_err"></span>


                <!--prenom-->
                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="text" name="prenom" placeholder="Prenom" required onchange="verifier_champs()">                            <span class="controle" id="etat_prenom" ></span><br>
                    </div>
                    <span id="msg_prenom" class="msg_err"></span>


                <!--username-->
                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="text" name="username" placeholder="Pseudo" required onchange="verifier_champs()">                          <span class="controle" id="etat_username"></span><br>
                    </div>


                <!--email-->
                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="text" name="email" placeholder="E-mail" required onchange="verifier_champs()">                                 <span class="controle" id="etat_email"></span><br>
                    </div>

                <!--mot de passe-->
                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="password"  name="password" placeholder="Mot de passe" required onchange="verifier_champs()" >              <span class="controle" id="etat_mdp"></span><br>
                    </div>


                <!--confiremer mot de passe-->
                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="password"  name="confirm_password" placeholder="Confirmer mot de passe" required onchange="verifier_champs()"><span class="controle" id="etat_mdp2"></span><br>
                    </div>
                    <span id="msg_mdp2" class="msg_err"></span>
                
                <!--tel-->
                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="tel" name="tel" placeholder="Numéro de telephone" required onchange="verifier_champs()">                   <span class="controle" id="etat_tel"></span>
                    
                    </div>
                    <span id="msg_tel"></span>


                <!--sit fam-->
                    <div class="input-group mb-3">
                    <input class="form-control input_user" list="sitfam" name="sit_fam" placeholder="Situation familiale" required onchange="verifier_champs()">            
                            <datalist id="sitfam">
                            <option value="Marié">
                            <option value="Celibataire">
                            </datalist>                                                                                                                      <span class="controle" id="etat_sit_fam"></span><br>
                    </div>
                    <span id="msg_sit_fam"></span>
                    
                    <input type="submit" value="S'inscrire" name="submit" class="btn login_btn" id="login_btn_insc"><br>
                    
                    <span id="msg"></span> 
                    
                <?php
                    if(isset($_POST["submit"])){
                    $controle=true;
                    $select=$db->query('SELECT * FROM clients');
                
                    while($donnee=$select->fetch()){
                        if($_POST["email"]==$donnee["email"]){
                            ?>
                            <span style="color:red;font-size:15px;">L'e-mail existe déja !!</span>
                            <!--******************* pour actualiser la page automatiquement  *********************-->
                            
                            <meta http-equiv="refresh" content="5;url=./inscription.php" /> 
                            <?php
                            
                            $controle=false;
                        }
                        if($_POST["tel"]==$donnee["tel"]){
                            ?>
                            <span style="color:red;font-size:15px;">Le numéro de téléphone est déjà utilisé !!</span>
                            <!--******************* pour actualiser la page automatiquement  *********************-->
                            
                            <meta http-equiv="refresh" content="5;url=./inscription.php" /> 
                            <?php
                            
                            $controle=false;
                        }
                        if($_POST["username"]==$donnee["username"]){
                            
                            ?>
                            <span style="color:red;font-size:15px;">Le pseudo est déja utilisé !!</span>
                            <!--******************* pour actualiser la page automatiquement  *********************-->
                            
                            <meta http-equiv="refresh" content="5;url=./inscription.php" /> 
                            <?php
                            
                            $controle=false;
                            
                        }
                    }
                    if($controle==false){

                        
                        ?>
                        <span style="color:red;font-size:15px;">Echec d'enregistrement !! </span>
                        <meta http-equiv="refresh" content="5;url=./inscription.php" /> 
                        <?php
                    }
                    else{
                        $pass=password_hash($_POST['password'], PASSWORD_DEFAULT);
                        //   insertion dans la base de donnee
                        $insert=$db->prepare('INSERT INTO clients VALUES(NULL,?,?,?,?,?,?,?)');
                        $insert->execute(array($_POST['nom'],$_POST['prenom'],$_POST['username'],$_POST['email'],$pass,$_POST['tel'],$_POST['sit_fam']));
                        echo("Votre compte a été créé avec succès");
                        $_SESSION["username"]=$_POST["username"];
                        $_SESSION["nom"]=$_POST["nom"];
                        $_SESSION["prenom"]=$_POST["prenom"];

                        ?>
                        
                        <meta http-equiv="refresh" content="3;url=../index.php" /> 
                        <?php
                        }
                    }
            
                    
                    
                        
                    


                ?>
    
               </form>


            </div>
		
				
			
		</div>
	</div>
  </div>
  <?php
  include_once("../includes/footer.php");
   ?>
    <script type="text/javascript" src="../js/js.js"> 
        
    </script>
    