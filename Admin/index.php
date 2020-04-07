<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
            $_SESSION["nom_admin"]="";
            $_SESSION["psw_admin"]="";
    ?>


    <form action="" method="post" class="form_inscription">
        <span>Nom de l'administrateur :</span>
        <input type="text" name="nom_admin"  class="inp_insc"><br>
        <span>Mot de passe :</span>
        <input type="password" name="psw_admin" class="inp_insc"><br>
        <input type="submit" value="Se connecter" class="btn_inscr" name="submit">

    <?php  
        if(isset($_POST["submit"])){
            if(($_POST["nom_admin"]=="user")&&($_POST["psw_admin"]=="1234")){
                    
                    $_SESSION["nom_admin"]="user";
                    $_SESSION["psw_admin"]="1234";
                    header("location: ./plateforme_admin.php");
            }
            else ?> <h3>Mot de passe incorect ! </h3> <?php
        }
    ?>

    </form>
</body>
</html>