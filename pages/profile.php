
<!DOCTYPE html>
<html lang="fr">
<head>
<!--les metas necessaire-->
    <meta charset="UTF-8">
    <meta name="description" content="Un site de vente d'apartement, villa et studio pour la wilaya de tizi ouzou ">
    <meta name="keywords" content="tizi-ouzou,vente,appartement,maison,villa,algerie">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--le titre-->
    <title>Platform Client</title>
<!--icon du site-->
    <link rel="icon" href="../images/icon/favicon.ico">
<!--feuilles de style-->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        
</head>
<body>
<?php
  $titre_page="Profiless";
  $db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
  include_once('../includes/header.php');
?>
<div class="container-fluid d-flex justify-content-center" id="profile">
  <div class="d-flexbox flexrow ">
    <section class="labox"> 
        <div class="d-flexbox flexrow">
            <div class=" d-flex justify-content-center" >
                <div class="proinit">
                    <?php 
                    $nom=$_SESSION["nom"];
                    $prenom=$_SESSION["prenom"]; 
                    echo('<h1 id="initial">'.$prenom[0].$nom[0].'</h1>'); 
                                                   
                    ?>
                   
                </div>
            </div>
            <div class=" d-flex justify-content-center  ">
                <div class="bienvenue">
                    <h3 ><?php echo($_SESSION["username"]) ?> <br> Bienvenue sur votre profile</h3> <br> 
                    <h5>consulter vos informations personnelles <h5> <br>
                    <!-- Button trigger modal pour changer mot de passe et pseudo -->
                  <button type="button" class="btn login_btn" data-toggle="modal" data-target="#staticBackdrop">
                   Modifier votre Mot De Pass ou/et Pseudo
                  </button>
                  <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                             <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">Changer Votre Mot Pass ou/et Pseudo</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                  </button>
                             </div>
                        
                             <div class="modal-body d-flex justify-content-center  ">
                              <div>
                             <?php 
                              $proclient=$db->query("SELECT * FROM clients WHERE id=".$_SESSION["id"]."");
                               $profile = $proclient->fetch();
                             echo('<form action="" method="POST">
                                <div class="input-group mb-3">
                                 <label  class="label"> Pseudo:
                                     <input type="text" name="pseudo" class="form-control input_user sizebtn" placeholder="votre pseudo" value="'.$profile["username"].' "required>
                                 </label>
                                 </div>
                                 <div class="input-group mb-3">
                                  <input type="submit" value="Modifier le Pseudo" class="btn login_btn " name="submit">
                                 </div> '); 
                                 if(isset($_POST["submit"])){
                                  $id=$profile["id"];
                                  $username=$_POST["username"];
                                  $use=$db->prepare("UPDATE clients SET username='$username' WHERE id=$id");
                                  $use->execute();
                                 echo(' <script> alert("le Pseudo as été modifier"); </script> </form>                                
                                 ');
                              }
                                 ?>
                                 <form action="" method="POST"></form>
                                 <div class="input-group mb-3">
                                     <label class="label"> Ancien mot de passe:
                                      <input type="password" name="ancienpass" class="form-control input_user sizebtn" placeholder="Ancien" required >
                                     </label>
                                  </div>                                
                                <div class="input-group mb-3">
                                 <label  class="label"> Nouveau mot de passe:
                                    <input type="password" name="nouveaupass" class="form-control input_user sizebtn" placeholder="Nouveau" required ></label>
                               </div> 
                               <div class="input-group mb-3">
                                 <label  class="label"> Confirmer mot de passe:
                                 <input type="password" name="confirmepass" class="form-control input_user sizebtn" placeholder="confirmation"  required>
                                 </label>
                                </div> 
                                <div class="input-group mb-3">
                                  <input type="submit" value="Modifier le mot de pass" class="btn login_btn " name="submit_pass">
                                </div> 
                                <?php
                                if(isset($_POST["submit_pass"])){
                                  if($_POST['ancienpass']==$profile['password']){
                                    if($_POST['nouveaupass']==$_POST['confirmepass']){
                                       $id=$profile["id"];
                                       $pass=$_POST["nouveaupass"];
                                       $motpass=$db->prepare("UPDATE clients SET password='$pass' WHERE id=$id");
                                       $motpass->execute();
                                       echo(' <script> alert("le mot de pass as été modifier"); </script>  ' );}                              
                                    else{
                                      echo(' <span class="warning">onfirmation et nouvea mot de passe sont different</span>  ' );
                                    }}
                                    else{echo(' <span class="warning">Ancien mot de pass inorrect</span>  ' );}
                              }
                                
                                ?>
                              
                              </form>
                              </div>
                            
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                            </div>
                        
                       </div>
                     </div>
                   </div>
                </div>
                <div id="barcoté">
                    <form action="" method="POST"> 
                <?php 
                    echo('
               
                 <div class="input-group mb-3">
                   <label  class="label"> Nom:
                    <input type="text" name="nom" class="form-control input_user sizebtn" placeholder="votre nom" value="'.$profile["nom"].' "required>
                    </label>
                 </div>
                  <div class="input-group mb-3">
                   <label class="label"> Prenom:
                    <input type="text" name="prenom" class="form-control input_user sizebtn" placeholder="votre prenom" value="'.$profile["prenom"].'" required>
                   </label>
                 </div>                                
                 <div class="input-group mb-3">
                   <label  class="label"> Numero de Telephone:
                   <input type="tel" name="tel" class="form-control input_user sizebtn" placeholder="numero de telephone" value="'.$profile["tel"].'" required></label>
                 </div> 
                 <div class="input-group mb-3">
                 <label  class="label"> E-Mail:
                    <input type="email" name="mail" class="form-control input_user sizebtn" placeholder="votre email" value="'.$profile["email"].'" required>
                  </label>
                 </div>  
                 <div class="input-group mb-3">
                    <input type="submit" value="Modifier Les informations" class="btn login_btn " name="submit_info">
                 </div>  
                 ');

                 if(isset($_POST["submit_info"])){
                     $id=$profile["id"];
                     $nomu=$_POST["nom"];
                     $prenomu=$_POST["prenom"];
                     $tel=$_POST["tel"];
                     $mail=$_POST["mail"];
                    $modifier=$db->prepare("UPDATE clients SET nom='$nomu', prenom='$prenomu', tel='$tel', email='$mail'  WHERE id=$id");
                    $modifier->execute();
                    echo(' <script> alert("Profile as été modifier"); </script>
                    <meta http-equiv="refresh" content="0;url=./profile.php#profile" />        
                    ');
                 }
                ?>
                </form>
                </div> 

            </div>
            <div class="d-flex justify-content-center" >
              <div class="d-flexbox flexrow">
              <p id="lienlistefav" style="color: orange;">les favoris</p>
              <div class="d-flex justify-content-center" >
              <a href="./profile#favoris"><i class="fa fa-angle-double-down" style="color: orange; font-size:1.5rem;"></i></i></a> </div>
            </div>
            </div>
          </div>
    </section>
    <div id="favoris" style="padding-top:3px;">
    <section class="labox" >

    </section>
  </div>
</div>
</div>
<?php
  include_once("../includes/footer.php");
?>
<script src="../js/bootstrap.js"></script>
</body>
</html>

