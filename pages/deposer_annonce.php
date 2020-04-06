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
         <title> TiziHome- Deposer une annonce  </title>
         <!--icon du site-->
         <link rel="icon" href="./image/icon/favicon.ico">
         <!--feuilles de style-->
         <link rel="stylesheet" href="./style/style.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
         <!--Scriptes-->
         <script type="text/javascript" src="./js/jQuery.js"></script>
         <script src="./js/jsscript.js"></script>
       </head>
<body>
<?php
include_once("../includes/header.html");
//    connexion a la base de donnee  
$db=new PDO('mysql:host=localhost;dbname=vilavie','root','');
?>

    <form action="" method="post" class="form_inscription">
        <h2>Déposer une annonce </h2>
        <input type="text" name="titre" class="inp_insc" placeholder="Titre"><br>
        <textarea name="description" cols="35"  rows="10" class="discription_annonce" placeholder="Description du bien"></textarea><br>
        <input type="number" name="surface" class="inp_insc" placeholder="Surface">
        <input type="number" name="nbr_etages" class="inp_insc" placeholder="Nombre d'étages">
        
        <input type="submit" value="Envoyer" class="btn_inscr" name="submit">
        <?php
            if(isset($_POST["submit"])){
                
                $titre=$_POST["titre"];
                $description=$_POST["descriptoion"];
                $surface=$_POST["surface"];
                $nbr_etages=$_POST["nbr_etages"];
                
                //pas d'image pour l'instant-------------
                
                
                
                //   insertion dans la base de donnee
                $insert=$db->prepare('INSERT INTO annonce VALUES(NULL,?,?,?,?)');
                $insert->execute(array($_POST["titre"],$_POST["description"],$_POST["surface"],$_POST["nbr_etages"]));
                
            }


        ?>

    </form>

    
</body>
</html>