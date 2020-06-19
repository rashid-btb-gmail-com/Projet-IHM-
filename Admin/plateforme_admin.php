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
    $db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
         
        if(($_SESSION["nom_admin"]!="user")||($_SESSION["psw_admin"]!="1234")){
            header("location: ./index.php");
        }
    ?>
    
    <!--**************************************Menu administrateur **********************************-->
    <nav class="menu_admin">
    <img src="../images/logo.png" alt="logo_agence">
    <div class="profileadmin">
        <input type="image" src="../images/user.png" alt="photo de profile" class="photo_profil">
        <h2 class="nom_admin">NOM Prenom </h2>
    </div>
    <div class="menubien">
        <a href="?action=ajouter_bien" class="onglet_admin" id="onglet1">Ajouter un bien</a>
        <a href="?action=gerer_biens" class="onglet_admin" id="onglet2" onclick="">Gerer les biens</a>
        <a href="?action=confirmer_annonces" class="onglet_admin" id="onglet3" onclick="">Confirmer les annonces</a>
    </div> 
    <div class="menurdv">
        <a href="?action=ajouter_rdv" class="onglet_admin " id="onglet4" onclick="">Ajouter un RDV</a>
        <a href="?action=gerer_rdv" class="onglet_admin " id="onglet5" onclick="">Gérer les RDV</a>
        <a href="?action=confirmer_rdv" class="onglet_admin " id="onglet6" onclick="">Confirmer les RDV</a>
    </div>
    <div class="menuclient">
        <a href="?action=clients" class="onglet_admin " id="onglet7" onclick="">Clients</a>
    </div>
        </nav>


        <div class="container">
            <!--**********************     header    *************************-->
            <header class="header_admin">
                <h1>Plateforme Administrateur</h1>
                <div class="container_icon">
                    <a href="?action=msg"class="icon_header" title="Messages"><i class="fas fa-envelope"></i></a>
                    <a href="../index.php"class="icon_header" title="Acceuil"><i class="fas fa-home"></i></a>
                    <a href="./index.php" class="icon_header" title="Déconnexion"><i class="fas fa-sign-out-alt"></i></a>

                </div>
            </header>
            <!--*****************************************Page admin*******************************************-->
            <div class="page_admin">
                <?php
                    if(isset($_GET["action"])){
                        //***************************affichage du formulaire ajouter un bien ************  */
                        if($_GET["action"]=="ajouter_bien"){
                            ?>

                            
                            <form action="" enctype="multipart/form-data" method="post" class="form_admin">
                                <h2>Ajouter un bien :</h2>
                                <input type="text" name="titre" class="inp_insc" placeholder="Titre" require><br>
                                <textarea name="description" cols="35"  rows="10" class="inp_insc" style="height:150px; resize: none;" placeholder="Description du bien" require></textarea><br>
                                <!--*********   liste des dairas de tizi ouzou   **********-->
                                <SELECT id="daira" name="daira" class="inp_insc" onchange="filtre_commune()" required>
                                    <option value="" disabled selected> Daïra</option>
                                    <option value="01-Ain El Hammam">01-Ain El Hammam</option>
                                    <option value="02-Azazga">02-Azazga</option>
                                    <option value="03-Azeffoun ">03-Azeffoun</option>
                                    <option value="04-Beni Douala">04-Beni Douala</option>
                                    <option value="05-Beni Yenni">05-Beni Yenni</option>
                                    <option value="06-Boghni">06-Boghni</option>
                                    <option value="07-Bouzguen">07-Bouzguen</option>
                                    <option value="08-Draâ Ben Khedda">08-Draâ Ben Khedda</option>
                                    <option value="09-Draâ El Mizan">09-Draâ El Mizan</option>
                                    <option value="10-Iferhounène">10-Iferhounène</option>
                                    <option value="11-Larbaâ Nath Irathen">11-Larbaâ Nath Irathen</option>
                                    <option value="12-Mâatkas">12-Mâatkas</option>
                                    <option value="13-Makouda">13-Makouda</option>
                                    <option value="14-Mekla">14-Mekla</option>
                                    <option value="15-Ouacif">15-Ouacif</option>
                                    <option value="16-Ouadhia">16-Ouadhia</option>
                                    <option value="17-Ouaguenoun">17-Ouaguenoun</option>
                                    <option value="18-Tigzirt">18-Tigzirt</option>
                                    <option value="19-Tizi Gheniff">19-Tizi Gheniff</option>
                                    <option value="20-Tizi Ouzou">20-Tizi Ouzou</option>
                                    <option value="21-Tizi Rached">21-Tizi Rached</option>
                            </SELECT>
                                    
                                <!--*********   liste des communes de tizi ouzou   **********-->
                                <SELECT id="commune"  name="commune" class="inp_insc"required>
                                <option value="" disabled selected>Commune</option>
                            
                            </SELECT><br>


                                <input type="number" name="surface" class="inp_insc" placeholder="Surface"><br>
                                <input type="number" name="nbr_etages" class="inp_insc" placeholder="Nombre d'étages"><br>
                                <input type="number" name="prix" class="inp_insc" placeholder="Prix du biens"><br>
                                <input type="text" name="proprio" class="inp_insc" placeholder="Propriétaire"><br>
                                <input type="file" name="image_annonce"  ><br>
                                <input type="submit" value="Enregister" class="btn_inscr" name="submit">
                                    <?php
                                        if(isset($_POST["submit"])){
                                            
                                            $dossier_upload = 'upload/'; // dossier où sera déplacé le fichier

                                            $tmp_fichier = $_FILES['image_annonce']['tmp_name'];
        
                                            if( !is_uploaded_file($tmp_fichier) )
                                            {
                                                exit("Le fichier est introuvable");
                                            }
        
                                            // on vérifie  l'extension
        
                                            $type_file = $_FILES['image_annonce']['type'];
        
                                            if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
                                            {
                                                exit("Le fichier n'est pas une image");
                                            }
                                            
                                            $select=$db->query('SELECT MAX(id) FROM demande_annonce');
        
                                                $id_img=$select->fetch();
                                                
                                            // on copie le fichier dans le dossier de destination
                                            $nom_fichier =$id_img[0].'_'.$_FILES['image_annonce']['name'];
                                            //recuperer le lien de l'image
                                            $lien_img=$dossier_upload . $nom_fichier;
                                            if( !move_uploaded_file($tmp_fichier,"../".$dossier_upload . $nom_fichier) )
                                            {
                                                exit("Impossible de copier le fichier dans $dossier_upload");
                                            }
        
                                            echo "  Le fichier a bien été uploadé";
                                            
                                            
                                            //   insertion dans la base de donnee
                                            $insert=$db->prepare('INSERT INTO biens VALUES(NULL,?,?,?,?,?,?,?,?,?)');
                                            $insert->execute(array($_POST["titre"],$_POST["description"],$_POST["daira"],$_POST["commune"],$_POST["surface"],$_POST["nbr_etages"],$_POST["prix"],$lien_img,$_POST["proprio"]));
                                            
                                        }


                                    ?>

                            </form>
                            
                            
                            <?php
                        }
                        //****************************  afficher et gerer tout les biens de l'agence*************** */
                        if($_GET["action"]=="gerer_biens"){
                            $select=$db->query('SELECT * FROM biens');
                            ?>
                            <div class="form_admin">
                            <h2>Liste des biens :</h2>
                                <div style="height: 250px; width: 730px; overflow: auto;">
                                    <table class="liste_biens" cellpadding="3" rules="all">
                                        <colgroup span="6" class="columns"></colgroup>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Surface</th>
                                            <th>Etages</th>
                                            <th>Daïra</th>
                                            <th>Commune</th>
                                            <th>Prix</th>
                                            <th>Propriétaire</th>
                                        </tr>
                                        <?php
                                        
                                        while($donnees=$select->fetch()){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $donnees["titre"] ?></td>
                                                <td><?php echo $donnees["surface"] ?></td>
                                                <td><?php echo $donnees["etage"] ?></td>
                                                <td><?php echo $donnees["daira"] ?></td>
                                                <td><?php echo $donnees["commune"] ?></td>
                                                <td><?php echo $donnees["prix"] ?> DA</td>
                                                <td><?php echo $donnees["proprietaire"] ?></td>
                                                <td><a href="?action=gerer_biens&amp;action2=modifier&amp;id=<?php echo $donnees["id"]; ?>" title="Modifier le bien"class="icon_supprimer" style="color:green;"><i class="far fa-edit"></i></a></td>
                                                <td><a href="?action=gerer_biens&amp;action2=supprimer&amp;id=<?php echo $donnees["id"]; ?>" title="Supprimer le bien"class="icon_supprimer "><i class="far fa-trash-alt"></i></a></td>
                                                
                                            </tr>

                                            <?php
                                        }

                                        ?>
                                    
                                    </table>
                                </div>
                                       
                            </div>
                            <?php 
                                //********************  supprimer ou modifier des biens    **************************** */
                                if(isset($_GET["action2"])){
                                    $id=$_GET["id"];
                                    //supprimer
                                    if($_GET["action2"]=="supprimer"){
                                    
                                    $supprimer=$db->prepare("DELETE FROM biens WHERE id = $id");
                                    $supprimer->execute();
                                    ?>
                                    <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_biens" />
                                    <?php
                                    }
                                    
                                    
                                    //***************************modifier ************************//
                                    if($_GET["action2"]=="modifier"){
                                    

                                        $select=$db->query("SELECT titre FROM biens WHERE id=$id");
                                        $donnees=$select->fetch();
                                        ?>
                                        <div class="modifier_bien">
                                            <h3>Modification du bien : <?php echo $donnees[0]; ?></h3><br>
                                            <form action="" method="post">
                                                <input list="champ_a_modifier" name="champ_modifier" placeholder="Champ à modifier" class="inp_insc" required">            
                                                    <datalist id="champ_a_modifier">
                                                    <option value="titre">
                                                    <option value="surface">
                                                    <option value="etage">
                                                    <option value="daira">
                                                    <option value="commune">
                                                    <option value="prix">
                                                    <option value="proprietaire">
                                                    </datalist> 
                                                <br>
                                                <input type="text" name="modification" placeholder="Modification" class="inp_insc" required><br>
                                                <input type="submit" name="valider_modification" value="Valider">

                                                <?php 
                                                    if(isset($_POST["valider_modification"])){
                                                        
                                                        $champ_modifier=$_POST["champ_modifier"];
                                                        $modification=$_POST['modification'];
                                                        echo $champ_modifier;
                                                        $modifier=$db->prepare("UPDATE biens SET $champ_modifier='$modification' WHERE id=$id");
                                                        $modifier->execute();

                                                        ?>
                                                        <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_biens" />
                                                        <?php
                                                        
                                                    }
                                                ?>
                                            </form>
                                        </div>
                                        <?php
                                    }
                                }
                            ?>               


                            <?php
                        } 
                        //****************************  afficher et gerer toutes les demande d'annoces *************** */
                        if($_GET["action"]=="confirmer_annonces"){
                            $select=$db->query('SELECT * FROM demande_annonce');
                            ?>
                            <div class="form_admin">
                            <h2>Liste des demande d'annoces :</h2>
                                <div style="height: 400px; width: 650px; overflow: auto;">
                                    <table class="liste_biens" cellpadding="3" rules="all">
                                        <colgroup span="6" class="columns"></colgroup>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Type du bien</th>
                                            <th>Daïra</th>
                                            <th>Commune</th>
                                            <th>Propriétaire</th>
                                        </tr>
                                        <?php
                                        
                                        while($donnees=$select->fetch()){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $donnees["titre"] ?></td>
                                                <td><?php echo $donnees["type_bien"] ?></td>
                                                <td><?php echo $donnees["daira"] ?></td>
                                                <td><?php echo $donnees["commune"] ?></td>
                                                <td><?php echo $donnees["proprietaire"] ?></td>
                                                <td><a href="?action=confirmer_annonces&amp;action2=voir_plus&amp;id=<?php echo $donnees["id"]; ?>" title="Refuser l'annoce" class="voir_plus">Plus de détails</a></td>
                                                <td><a href="?action=confirmer_annonces&amp;action2=accepter&amp;id=<?php echo $donnees["id"]; ?>" title="Accepter l'annonce"class="icon_supprimer" style="color:green;"><i class="fas fa-check" ></i></a></td>
                                                <td><a href="?action=confirmer_annonces&amp;action2=supprimer&amp;id=<?php echo $donnees["id"]; ?>" title="Refuser l'annoce"class="icon_supprimer "><i class="fas fa-times" ></i></a></td>
                                                
                                                
                                            </tr>

                                            <?php
                                        }

                                        //**************************    accepter et supprimerl'annonce *********************** */
                                        if(isset($_GET["action2"])){
                                            //accepter
                                            if($_GET["action2"]=="accepter"){
                                                
                                            $id=$_GET["id"];
                                            $select=$db->query("SELECT * FROM demande_annonce WHERE id=$id");
                                            while($donnees=$select->fetch()){
                                                $insert=$db->prepare('INSERT INTO biens VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?)');
                                                $insert->execute(array($donnees["titre"],$donnees["description"],$donnees["daira"],$donnees["commune"],$donnees["adresse"],$donnees["type_bien"],$donnees["surface"],$donnees["etage"],$donnees["pieces"],$donnees["prix"],$donnees["lien_img"],$donnees["proprietaire"]));
                                                $supprimer=$db->prepare("DELETE FROM demande_annonce WHERE id = $id");
                                                $supprimer->execute();
                                                ?>
                                                <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=confirmer_annonces" />
                                                <?php
                                            }
                                
                                            }
                                            //supprimer
                                            if($_GET["action2"]=="supprimer"){
                                                $id=$_GET["id"];
                                                $supprimer=$db->prepare("DELETE FROM demande_annonce WHERE id = $id");
                                                $supprimer->execute();
                                                ?>
                                                <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=confirmer_annonces" />
                                                <?php
                                            }

                                            
                                        }
                                        
                                        ?>
                                        
                                        
                                    </table>
                                </div>
                            </div>
                            <?php
                        } 
                        //*******************************afficher le formulaire ajouter des RDV************ */
                        if($_GET["action"]=="ajouter_rdv"){
                            ?>

                            
                            <form action="" method="post" class="form_admin">
                                <h2>Ajouter un rendez-vous :</h2>
                                <input type="text" name="client" class="inp_insc" placeholder="Client" ><br>
                                <input type="text" name="lieu" class="inp_insc" placeholder="Lieu du rendez-vous"><br>
                                <span>Date du rendez-vous :</span>
                                <input type="date" name="date_rdv" class="inp_insc"><br>
                                
                                
                                <input type="submit" value="Enregister" class="btn_inscr" name="submit">
                                    <?php
                                        if(isset($_POST["submit"])){
                                            $date=$_POST["date_rdv"];
                                            

                                            //   insertion dans la base de donnee
                                            $insert=$db->prepare('INSERT INTO rdv_confirmer VALUES(NULL,?,?,?)');
                                            $insert->execute(array($_POST["client"],$_POST["lieu"],$date));
                                            
                                        }


                                    ?>

                            </form>
                            
                            
                            <?php
                        }
                        //****************************  afficher tout les RDV *************** */
                        if($_GET["action"]=="gerer_rdv"){
                            $select=$db->query('SELECT * FROM rdv_confirmer');
                            ?>
                            <div class="form_admin">
                            <h2>Liste des RDV :</h2>


                            <!--**************    filtre pour les rdv   **************     -->
                            <form action="" method="post" class="filtre">
                                <input type="text" name="client_filtre" class="inp_insc" placeholder="Nom du client">
                                <input type="text" name="lieu_filtre" class="inp_insc" placeholder="lieu du rdv">
                                <input type="date" name="date_filtre" class="inp_insc" >
                                
                                <input type="submit" name="filtrer" value="Filtrer" class="inp_insc">
                                <?php
                                if(isset($_POST["filtrer"])){
                                    //******************    filtre des rdv  ***************************** */
                                        if(isset($_POST["client_filtre"])&&(isset($_POST["lieu_filtre"]))&&(isset($_POST["date_filtre"]))){
                                            $select=$db->prepare("SELECT * FROM rdv_confirmer WHERE client=? AND lieu=? AND date=?");
                                            $date=$_POST["date_filtre"]; 
                                            
                                            $select->execute(array($_POST["client_filtre"],$_POST["lieu_filtre"],$date));
                                        }
                                        if(isset($_POST["client_filtre"])&&(isset($_POST["lieu_filtre"]))){
                                            $select=$db->prepare("SELECT * FROM rdv_confirmer WHERE client=? AND lieu=?");                    
                                            $select->execute(array($_POST["client_filtre"],$_POST["lieu_filtre"]));
                                        }
                                        if($_POST["lieu_filtre"]==null){
                                            $select=$db->prepare("SELECT * FROM rdv_confirmer WHERE client=?");                    
                                            $select->execute(array($_POST["client_filtre"]));
                                        }
                                        if($_POST["client_filtre"]==null){
                                            $select=$db->prepare("SELECT * FROM rdv_confirmer WHERE lieu=?");                    
                                            $select->execute(array($_POST["lieu_filtre"]));
                                        }
                                        if(($_POST["client_filtre"]==null)&&($_POST["lieu_filtre"]==null)&&(isset($_POST["date_filtre"]))){
                                            $select=$db->prepare("SELECT * FROM rdv_confirmer WHERE date=?"); 
                                            $date=$_POST["date_filtre"];
                                                            
                                            $select->execute(array($date));
                                        }
                                        
                                            ?>
                                        <div style="height: 400px; width: 650px; overflow: auto;">
                                            <table class="liste_biens" cellpadding="3" rules="all">
                                            <colgroup span="3" class="columns"></colgroup>
                                            <tr>
                                            <th>Client</th>
                                            <th>Lieu</th>
                                            <th>Date et Heure</th>
                                            
                                            </tr>
                                        <?php
                                        
                                        while($donnees=$select->fetch()){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $donnees["client"] ?></td>
                                                <td><?php echo $donnees["lieu"] ?></td>
                                                <td><?php echo $donnees["date"] ?></td>
                                                <td><a href="?action=gerer_rdv&action2=modifier&id=<?php echo $donnees["id"]; ?>" title="Modifier le rdv" class="icon_supprimer" style="color:green;"><i class="far fa-edit"></i></a></td>
                                                <td><a href="?action=gerer_rdv&action2=supprimer&id=<?php echo $donnees["id"]; ?>" title="Supprimer le rdv" class="icon_supprimer"><i class="far fa-trash-alt"></i></a></td>
                                                
                                            </tr>
        
                                            <?php
                                        }
        
                                        //********************  supprimer des rdv    **************************** */
                                        
                                        if(isset($_GET["action2"])=="supprimer"){
                                            $id=$_GET["id"];
                                            $supprimer=$db->prepare("DELETE FROM rdv_confirmer WHERE id = $id");
                                            $supprimer->execute();
                                            ?>
                                            <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_rdv" />
                                            <?php

                                        }
                                        

                                        if($_GET["action2"]=="modifier"){
                                    

                                            $select=$db->query("SELECT client FROM rdv_confirmer WHERE id=$id");
                                            $donnees=$select->fetch();
                                            ?>
                                            <div class="modifier_bien">
                                                <h3>Modification du RDV de : <?php echo $donnees[0]; ?></h3><br>
                                                <form action="" method="post">
                                                    <input list="champ_a_modifier2" name="champ_modifier2" placeholder="Champ à modifier" class="inp_insc" required>            
                                                        <datalist id="champ_a_modifier2">
                                                        <option value="lieu">
                                                        <option value="date">
                                                        <option value="heur">
                                                        </datalist> 
                                                    <br>
                                                    <input type="text" name="modification" placeholder="Modification" class="inp_insc" required><br>
                                                    <input type="submit" name="valider_modification" value="Valider">
    
                                                    <?php 
                                                        if(isset($_POST["valider_modification"])){
                                                            
                                                            $champ_modifier=$_POST["champ_modifier2"];
                                                            $modification=$_POST['modification'];
                                                            echo $champ_modifier;
                                                            $modifier=$db->prepare("UPDATE rdv_confirmer SET $champ_modifier='$modification' WHERE id=$id");
                                                            $modifier->execute();
    
                                                            ?>
                                                            <script> alert("Le RDV a été Modifié"); </script>
                                                            <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_rdv" />
                                                            <?php
                                                            
                                                        } ?>
                                                   
    
    
                                                 </div>
                                <?php   }



                                        ?>
                                        
                                        
                                        </table>
                                    </div>
                                        <?php
                                        
                                }
                                else{
                                        ?>
                                    <table class="liste_biens" cellpadding="3" rules="all">
                                        <colgroup span="3" class="columns"></colgroup>
                                        <tr>
                                            <th>Client</th>
                                            <th>Lieu</th>
                                            <th>Date et Heure</th>
                                            
                                        </tr>
                                        <?php
                                        
                                        while($donnees=$select->fetch()){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $donnees["client"] ?></td>
                                                <td><?php echo $donnees["lieu"] ?></td>
                                                <td><?php echo $donnees["date"] ?></td>
                                                <td><a href="?action=gerer_rdv&action2=modifier&id=<?php echo $donnees["id"]; ?>" title="Modifier le rdv" class="icon_supprimer" style="color:green;"><i class="far fa-edit"></i></a></td>
                                                <td><a href="?action=gerer_rdv&action2=supprimer&id=<?php echo $donnees["id"]; ?>" title="Supprimer le rdv" class="icon_supprimer"><i class="far fa-trash-alt"></i></a></td>
                                                
                                            </tr>
        
                                            <?php
                                        }
        
                                        //********************  supprimer des rdv    **************************** */
                                    if(isset($_GET["action2"])){    
                                        if($_GET["action2"]=="supprimer"){
                                            $id=$_GET["id"];
                                            $supprimer=$db->prepare("DELETE FROM rdv_confirmer WHERE id = $id");
                                            $supprimer->execute();
                                            echo "aaaaaa";
                                            ?>
                                            <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_rdv" />
                                            <?php
                                        }


                                        if($_GET["action2"]=="modifier"){
                                            $id=$_GET["id"];

                                            $select=$db->query("SELECT client FROM rdv_confirmer WHERE id=$id");
                                            $donnees=$select->fetch();
                                            ?>
                                            <div class="modifier_bien">
                                                <h3>Modification du RDV de : <?php echo $donnees[0]; ?></h3><br>
                                                <form action="" method="post">
                                                    <input list="champ_a_modifier2" name="champ_modifier2" placeholder="Champ à modifier" class="inp_insc" required>            
                                                        <datalist id="champ_a_modifier2">
                                                        <option value="lieu">
                                                        <option value="date">
                                                        <option value="heur">
                                                        </datalist> 
                                                    <br>
                                                    <input type="text" name="modification" placeholder="Modification" class="inp_insc" required><br>
                                                    <input type="submit" name="valider_modification" value="Valider">
    
                                                    <?php 
                                                        if(isset($_POST["valider_modification"])){
                                                            
                                                            $champ_modifier=$_POST["champ_modifier2"];
                                                            $modification=$_POST['modification'];
                                                            echo $champ_modifier;
                                                            $modifier=$db->prepare("UPDATE rdv_confirmer SET $champ_modifier='$modification' WHERE id=$id");
                                                            $modifier->execute();
    
                                                            ?>
                                                            <script> alert("Le RDV a été Modifié"); </script>
                                                            <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_rdv" />
                                                            <?php
                                                            
                                                        } ?>
                                                   
    
    
                                                 </div>
                                <?php   }
                                        
                                        ?>
                                        
                                        
                                    </table>
                                    <?php
                                    }
                                }
                                ?>
                            </form>


                            </div>
                            <?php
                        }
                        //****************************  afficher et gerer toutes les demande de RDV *************** */
                        if($_GET["action"]=="confirmer_rdv"){
                            $select=$db->query('SELECT * FROM demande_rdv');
                            ?>
                            <div class="form_admin">
                            <h2>Liste des demande de rdv :</h2>
                                <div style="height: 400px; width: 650px; overflow: auto;">
                                    <table class="liste_biens" cellpadding="3" rules="all">
                                        <colgroup span="6" class="columns"></colgroup>
                                        <tr>
                                            <th>Client</th>
                                            <th>Lieu</th>
                                            <th>Date</th>
                                            <th>Heure</th>
                                        </tr>
                                        <?php
                                        
                                        while($donnees=$select->fetch()){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $donnees["client"] ?></td>
                                                <td><?php echo $donnees["lieu"] ?></td>
                                                <td><?php echo $donnees["date"] ?></td>
                                                <td><?php echo $donnees["time"] ?></td>
                                                
                                                <td><a href="?action=confirmer_rdv&amp;action2=accepter&amp;id=<?php echo $donnees["id"]; ?>" title="Accepter l'annonce"class="icon_supprimer" style="color:green;"><i class="fas fa-check" ></i></a></td>
                                                <td><a href="?action=confirmer_rdv&amp;action2=supprimer&amp;id=<?php echo $donnees["id"]; ?>" title="Refuser l'annoce"class="icon_supprimer "><i class="fas fa-times" ></i></a></td>
                                                
                                            </tr>

                                            <?php
                                        }

                                        //**************************    accepter et supprimerl'annonce *********************** */
                                        if(isset($_GET["action2"])){
                                            //accepter
                                            if($_GET["action2"]=="accepter"){
                                                
                                            $id=$_GET["id"];
                                            $select=$db->query("SELECT * FROM demande_rdv WHERE id=$id");
                                            while($donnees=$select->fetch()){
                                                $insert=$db->prepare('INSERT INTO rdv_confirmer VALUES(NULL,?,?,?)');
                                                $insert->execute(array($donnees["client"],$donnees["lieu"],$donnees["date"]." ".$donnees["time"]));
                                                $supprimer=$db->prepare("DELETE FROM demande_rdv WHERE id = $id");
                                                $supprimer->execute();
                                                ?>
                                                <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=confirmer_rdv" />
                                                <?php
                                            }
                                
                                            }
                                            //supprimer
                                            if($_GET["action2"]=="supprimer"){
                                                $id=$_GET["id"];
                                                $supprimer=$db->prepare("DELETE FROM demande_rdv WHERE id = $id");
                                                $supprimer->execute();
                                                ?>
                                                <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=confirmer_rdv" />
                                                <?php
                                            }

                                            
                                        }
                                        
                                        ?>
                                        
                                        
                                    </table>
                                </div>
                            </div>
                            <?php
                        } 
                        //****************************  afficher tout les clients de l'agence*************** */
                        if($_GET["action"]=="clients"){
                            $select=$db->query('SELECT * FROM clients');
                            ?>
                            <div class="form_admin">
                            <h2>Liste des clients :</h2>
                            <div style="height: 400px; width: 650px; overflow: auto;">
                                <table class="liste_biens" cellpadding="3" rules="all">
                                    <colgroup span="4" class="columns"></colgroup>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>E-mail</th>
                                        <th>Tel</th>    
                                    </tr>
                                    <?php
                                    
                                    while($donnees=$select->fetch()){
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $donnees["nom"] ?></td>
                                            <td><?php echo $donnees["prenom"] ?></td>
                                            <td><?php echo $donnees["email"] ?></td>
                                            <td><?php echo $donnees["tel"] ?></td>                                            
                                            <td><a href="?action=clients&amp;action2=supprimer&amp;id=<?php echo $donnees["id"]; ?>" title="Supprimer le client" class="icon_supprimer"><i class="far fa-trash-alt"></i></a></td>
                                            
                                        </tr>

                                        <?php
                                    }

                                    //********************  supprimer des clients    **************************** */
                                    
                                    if(isset($_GET["action2"])){
                                        if($_GET["action2"]=="supprimer"){
                                        $id=$_GET["id"];
                                        $supprimer=$db->prepare("DELETE FROM clients WHERE id = $id");
                                        $supprimer->execute();
                                        ?>
                                        <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=clients" />
                                        <?php
                                        }
                                        

                                    }
                                    
                                    ?>
                                    
                                    
                                </table>
                            </div>
                            </div>
                            <?php
                        } 
                        //******************************    afficher les messages  *************************** */
                        if($_GET["action"]=="msg"){
                            $select=$db->query('SELECT * FROM contact_msg');
                            ?>
                            <div class="form_admin">
                            <h2>Messages :</h2>
                            <div style="height: 400px; width: 650px; overflow: auto;">
                                <table class="liste_biens" cellpadding="3" rules="all">
                                    <colgroup span="4" class="columns"></colgroup>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>E-mail</th>
                                        <th>Sujet</th> 
                                        <th>Message</th>   
                                    </tr>
                                    <?php
                                    
                                    while($donnees=$select->fetch()){
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $donnees["nom"] ?></td>
                                            <td><?php echo $donnees["prenom"] ?></td>
                                            <td><?php echo $donnees["email"] ?></td>
                                            <td><?php echo $donnees["sujet"] ?></td>
                                            <td><a href="?action=msg&amp;action2=afficher_msg&amp;id=<?php echo $donnees["id"]; ?>">Afficher le message</a></td>                                    
                                            <td><a href="?action=msg&amp;action2=supprimer&amp;id=<?php echo $donnees["id"]; ?>" title="Supprimer le client" class="icon_supprimer"><i class="far fa-trash-alt"></i></a></td>
                                            
                                        </tr>

                                        <?php
                                    }

                                    //********************  supprimer des messages    **************************** */
                                    
                                    if(isset($_GET["action2"])){
                                        if($_GET["action2"]=="supprimer"){
                                        $id=$_GET["id"];
                                        $supprimer=$db->prepare("DELETE FROM contact_msg WHERE id = $id");
                                        $supprimer->execute();
                                        ?>
                                        <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=msg" />
                                        <?php
                                        }
                                        
                                        if($_GET["action2"]=="afficher_msg"){
                                    
                                            $id=$_GET["id"];
                                            $select=$db->query("SELECT nom,prenom,message FROM contact_msg WHERE id=$id");
                                            $donnees=$select->fetch();
                                            ?>
                                            <div class="modifier_bien">
                                                <h3>Message de : <?php echo $donnees[0]."  ".$donnees[1]; ?></h3><br>
                                                <p><?php echo $donnees[2]?></p>
                                            </div>
                                            <?php
                                        }

                                    }
                                    
                                    ?>
                                    
                                    
                                </table>
                            </div>
                            </div>
                            <?php
                        }
                        
                    

                    }
                ?>   
            </div>

        </div>

<script src="../js/js.js">

</script>

<script type="text/javascript">
 window.onload = style_onglet_admin();
 </script> 


</body>
</html>
