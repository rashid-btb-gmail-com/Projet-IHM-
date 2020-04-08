<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrateur</title>
</head>
<body>
    <?php
    session_start();
        
        if(($_SESSION["nom_admin"]!="user")||($_SESSION["psw_admin"]!="1234")){
            header("location: ./index.php");
        }
    ?>
    <header class="header_admin">
    
    </header>
</body>
</html>