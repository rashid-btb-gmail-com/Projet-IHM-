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
         <title>Vilavie- Deposer une annonce  </title>
         <!--icon du site-->
         <link rel="icon" href="../images/icon/favicon.ico">
         <!--feuilles de style-->
         <link rel="stylesheet" href="../style/style.css">
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
        <input type="text" name="titre" class="inp_insc" placeholder="Titre" require><br>
        <textarea name="description" cols="35"  rows="10" class="discription_annonce" placeholder="Description du bien" require></textarea><br>
        <!--*********   liste des dairas de tizi ouzou   **********-->
        <input list="daira" name="daira" class="inp_insc" placeholder="Daïra" require>
            <datalist id="daira">
                <option value="Ain El Hammam">
                <option value="Azazga">
                <option value="Azeffoun ">
                <option value="Beni Douala">
                <option value="Beni Yenni">
                <option value="Boghni">
                <option value="Bouzguen">
                <option value="Draâ Ben Khedda">
                <option value="Draâ El Mizan">
                <option value="Iferhounène">
                <option value="Larbaâ Nath Irathen">
                <option value="Mâatkas">
                <option value="Makouda">
                <option value="Mekla">
                <option value="Ouacif">
                <option value="Ouadhia">
                <option value="Ouaguenoun">
                <option value="Tigzirt ">
                <option value="Tizi Gheniff">
                <option value="Tizi Ouzou">
                <option value=" Tizi Rached">
            </datalist>
            
        <!--*********   liste des communes de tizi ouzou   **********-->
        <input list="commune" name="commune" class="inp_insc" placeholder="Commune" require>
            <datalist id="commune">
                <option value="Abi Youcef">
                <option value="Aghribs">
                <option value="Agouni Gueghrane">
                <option value="Ain El Hammam">
                <option value="Aïn Zaouia">
                <option value="Aït Aggouacha">
                <option value="Aït Aïssa Mimoun">
                <option value="Aït Bouaddou">
                <option value="Aït Boumahdi">
                <option value="Aït Chafâa">
                <option value="Aït Khellili">
                <option value="Aït Mahmoud">
                <option value="Aït Ouacif">
                <option value="Aït Oumalou">
                <option value="Aït Toudert">
                <option value="Aït Yahia">
                <option value="Aït Yahia Moussa">
                <option value="Aït Yenni">
                <option value="Aït Zmenzer">
                <option value="Akbil">
                <option value="Akerrou">
                <option value="Assi Youcef">
                <option value="Ath Zikki">
                <option value="Azazga">
                <option value="Azeffoun">
                <option value="Beni Aïssi">
                <option value="Beni Douala">
                <option value="Boghni">
                <option value="Boudjima">
                <option value="Bounouh">
                <option value="Bouzeguène">
                <option value="Draâ Ben Khedda">
                <option value="Draâ El Mizan">
                <option value="Freha">
                <option value="Frikat">
                <option value="Iboudraren">
                <option value="Idjeur">
                <option value="Iferhounène">
                <option value="Ifigha">
                <option value="Iflissen">
                <option value="Illilten">
                <option value="Illoula Oumalou">
                <option value="Imkiren">
                <option value="Imsouhel">
                <option value="Irdjen">
                <option value="Larbaâ Nath Irathen">
                <option value="Mâatkas">
                <option value="Makouda">
                <option value="Mechtras">
                <option value="Mekla">
                <option value="Mizrana">
                <option value="Ouadhia">
                <option value="Ouaguenoun">
                <option value="Sidi Namane">
                <option value="Souamaâ">
                <option value="Souk El Thenine">
                <option value="Tadmaït">
                <option value="Tigzirt">
                <option value="Timizart">
                <option value="Tirmitine">
                <option value="Tizi Gheniff">
                <option value="Tizi N'Tleta">
                <option value="Tizi Ouzou">
                <option value="Tizi Rached">
                <option value="Yakouren">
                <option value="Yatafen">
                <option value="Zekri">
            
            </datalist>


        <input type="number" name="surface" class="inp_insc" placeholder="Surface">
        <input type="number" name="nbr_etages" class="inp_insc" placeholder="Nombre d'étages">
        <input type="file" name="image_annonce"  ><br>
        <input type="submit" value="Envoyer" class="btn_inscr" name="submit">
        <?php
            if(isset($_POST["submit"])){
                //pas d'image pour l'instant-------------
                
                
                //   insertion dans la base de donnee
                $insert=$db->prepare('INSERT INTO annonce VALUES(NULL,?,?,?,?,?,?)');
                $insert->execute(array($_POST["titre"],$_POST["description"],$_POST["daira"],$_POST["commune"],$_POST["surface"],$_POST["nbr_etages"]));
                
            }


        ?>

    </form>

    
</body>
</html>