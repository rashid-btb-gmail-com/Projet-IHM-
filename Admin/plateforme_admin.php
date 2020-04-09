<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../style/style_admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
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
    
    <!--********************************Menu administrateur **************************-->
    <nav class="menu_admin">
        <input type="image" src="../images/user.png" alt="photo de profile" class="photo_profil">
        <h2 class="nom_admin">NOM Prenom </h2>
        <hr color="black">
        <input type="button" value="Ajouter un bien" class="btn_admin">
        <input type="button" value="Gerer les biens" class="btn_admin">
        <input type="button" value="Supprimer des biens" class="btn_admin">
        <input type="button" value="Confirmer les annonces" class="btn_admin">
        <hr color="black">
        <input type="button" value="Ajouter un RDV" class="btn_admin btn_rdv"  >
        <input type="button" value="Gérer les RDV" class="btn_admin btn_rdv"  >
        <input type="button" value="Confirmer les RDV" class="btn_admin btn_rdv"  >
        </nav>

        <div class="container">
            <header class="header_admin">
            <h1 class="titre_plfrm">Plateforme Administrateur</h1>
            <div class="container_icon">
                <a href=""class="icon_header" title="Messages"><i class="fas fa-comments"></i></a>
                <a href="" class="icon_header" title="Déconnexion"><i class="fas fa-sign-out-alt"></i></a>
            </div>
            </header>

            <div class="rdv">
                <h3 class="titre_plfrm">Mes rendez-vous :</h3>

                
            </div>

        </div>
        
</body>
</html>