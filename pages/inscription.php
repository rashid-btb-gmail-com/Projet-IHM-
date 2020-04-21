
<?php
include_once("../includes/header.php");
//    connexion a la base de donnee  
$db=new PDO('mysql:host=localhost;dbname=vilavie','root','');

//**************************   declaration des fonctions   **************** */



?>


    





    <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card" id="user_card_insc">
				<div class="d-flex justify-content-center">
					
						<img src="../images/logo.png" class="brand_logo" alt="Logo">
					
                </div>
                <h4 class="titre_connexion">Crée un compte Vilavie</h4>
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

                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="text" name="username" placeholder="Pseudo" required onchange="verifier_champs()">                          <span class="controle" id="etat_username"></span><br>
                    </div>
                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="text" name="email" placeholder="E-mail" required onchange="verifier_champs()">                                 <span class="controle" id="etat_email"></span><br>
                    </div>
                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="password"  name="password" placeholder="Mot de passe" required onchange="verifier_champs()" >              <span class="controle" id="etat_mdp"></span><br>
                    </div>
                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="password"  name="confirm_password" placeholder="Confirmer mot de passe" required onchange="verifier_champs()"><span class="controle" id="etat_mdp2"></span><br>
                    </div>
                    <div class="input-group mb-3">
                    <input class="form-control input_user" type="tel" name="tel" placeholder="Numéro de telephone" required onchange="verifier_champs()">                   <span class="controle" id="etat_tel"></span>
                    
                    </div>
                    <span id="msg_tel"></span>

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
                $select=$db->query('SELECT email FROM clients');
                
                while($donnee=$select->fetch()){
                    if($_POST["email"]==$donnee["email"]){
                        exit("L'e-mail existe déja !!");
                    }
                }
            
                if($_POST["password"]<>$_POST["confirm_password"]){
                    ?>
                    <h3>mot de passe incorect</h3>
                    <?php
                }
                else{
                    //   insertion dans la base de donnee
                $insert=$db->prepare('INSERT INTO clients VALUES(NULL,?,?,?,?,?,?,?)');
                $insert->execute(array($_POST['nom'],$_POST['prenom'],$_POST['username'],$_POST['email'],$_POST['password'],$_POST['tel'],$_POST['sit_fam']));
                }
            }


        ?>
    
    </form>


				</div>
		
				
			</div>
		</div>
	</div>
    <script type="text/javascript" src="../js/js.js"> 
        
    </script>
    