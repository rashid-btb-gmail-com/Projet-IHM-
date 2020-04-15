
<?php
include_once("../includes/header.html");
//    connexion a la base de donnee  
$db=new PDO('mysql:host=localhost;dbname=vilavie','root','');

//**************************   declaration des fonctions   **************** */



?>


    <form action="" method="post" class="form_inscription">
    <h2>Crée un compte Vilavie</h2>
    <input class="inp_insc" type="text" name="nom" placeholder="Nom" required onclick="saisie_champ()">  <span class="controle"></span><br>
    <input class="inp_insc" type="text" name="prenom" placeholder="Prenom" required onclick="saisie_champ()">                            <span class="controle"></span><br>
    <input class="inp_insc" type="text" name="username" placeholder="Pseudo" required onclick="saisie_champ()">                          <span class="controle"></span><br>
    
<input class="inp_insc" type="text" name="email" placeholder="E-mail" required onclick="saisie_champ()">                                 <span class="controle"></span><br>

    <input class="inp_insc" type="password" id="mdp" name="password" placeholder="Mot de passe" required onclick="saisie_champ()" >      <span class="controle"></span><br>
    <input class="inp_insc" type="password" id="mdp2" name="confirm_password" placeholder="Confirmer mot de passe" required onchange="verifier_mdp()" onclick="saisie_champ()"><span class="controle"></span><br>
    
    <input class="inp_insc" type="tel" name="tel" placeholder="Numéro de telephone" required onclick="saisie_champ()">                           <span class="controle"></span>
    <input class="inp_insc" list="sitfam" name="sit_fam" placeholder="Situation familiale" required onclick="saisie_champ()">            <span class="controle"></span><br>
            <datalist id="sitfam">
            <option value="Marié">
            <option value="Celibataire">
            </datalist>
    <input type="submit" value="S'inscrire" name="submit" class="btn_inscr"><br>
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
    <script type="text/javascript" src="../js/js.js"> 
        
    </script>
    