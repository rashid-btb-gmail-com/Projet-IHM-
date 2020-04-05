<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Déposer une annonce</title>
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