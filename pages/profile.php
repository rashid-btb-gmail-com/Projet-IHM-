
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
            <div class=" d-flex ">
                
                <div>
                <?php 
                    $proclient=$db->query("SELECT * FROM clients WHERE id=".$_SESSION["id"]."");
                    $profile = $proclient->fetch();
                    echo('
                    
                 <div class="input-group mb-3">
                    <input type="text" name="nom" class="form-control input_user" placeholder="votre nom" value="'.$profile["nom"].'">

                 </div>
                 <div class="input-group mb-3">
                    <input type="text" name="prenom" class="form-control input_user" placeholder="votre prenom" value="'.$profile["prenom"].'">

                 </div>                                
                 <div class="input-group mb-3">
                   <input type="tel" name="tel" class="form-control input_user" placeholder="numero de telephone" value="'.$profile["tel"].'">
                 </div> 
                 <div class="input-group mb-3">
                    <input type="email" name="mail" class="form-control input_user" placeholder="votre email" value="'.$profile["email"].'">

                 </div>     
                 ');
                ?>
                </div>
            </div>
            <div></div>
        </div>
    </section>
</div>
<?php
  include_once("../includes/footer.php");
?>
</body>
</html>

