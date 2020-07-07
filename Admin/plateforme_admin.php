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
    // variable de session pour le bouton radio vendre / location
    

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
        <h2 class="nom_admin"> </h2>
    </div>
    <div class="menubien">
        <a href="?action=ajouter_bien" class="onglet_admin" id="onglet1" onclick="style_onglet_admin();" >Ajouter une annonce</a>
        <a href="?action=gerer_biens" class="onglet_admin" id="onglet2" onclick="">Gerer les annonces</a>
        <a href="?action=confirmer_annonces" class="onglet_admin" id="onglet3" onclick="">Confirmer les annonces</a>
    </div> 
    <div class="menurdv">
        <a href="?action=ajouter_rdv" class="onglet_admin " id="onglet4" onclick="">Ajouter un RDV</a>
        <a href="?action=gerer_rdv" class="onglet_admin " id="onglet5" onclick="">Gérer les RDV</a>
        <a href="?action=confirmer_rdv" class="onglet_admin " id="onglet6" onclick="">Confirmer les RDV</a>
    </div>
    <div class="menuclient">
        <a href="?action=demenagement" class="onglet_admin " id="onglet8" onclick="">Demenagement</a>
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
                    if(!isset($_GET["action"])){
                        echo('<div class="bienvenueadmin">
                         <h1 >Bonjour!</h1>
                         <h2>Vous étes sure votre platform de getion du votre sitre</h2>
                         <h2>Gerer vos annonces et rendez-vous </h2>
                        </div>');
                    }
                    if(isset($_GET["action"])){
                        //***************************affichage du formulaire ajouter un bien ************  */
                        if($_GET["action"]=="ajouter_bien"){
                            ?>
                            <!--   radio vendre louer    -->
                            <div class="radio_vendre_louer">
                                <div class="radio_vendre">
                                    <a href="?action=ajouter_bien" class="input_radio " id="lien_vendre">Vente</a>
                                    
                                </div>
                                <div class="radio_louer">
                                <a href="?action=ajouter_bien_loc" class="input_radio" id="lien_louer">Location</a>
                                </div>
                            </div>
                            
                            <form action="" enctype="multipart/form-data" method="post" class="form_admin" id="form_vendre">
                                
                            
                            
                                <div class="ajouter_annonce">
                                <div class="container_left">
                                    <div class="input_group">
                                        <span class="span_ajouter_bien">Titre de l'annonce :</span><br>
                                        <input type="text" name="titre" class="inp_insc" placeholder="Titre de l'annonce" require><br>
                                    </div>


                                    <textarea name="description" cols="35"  rows="10" class="inp_insc" style="padding-top: 10px; height:150px; resize: none;" placeholder="Description du bien" require></textarea><br>
                                    <!--*********   liste des dairas de tizi ouzou   **********-->

                                    <div class="input_group">
                                        <span class="span_ajouter_bien">Localisation du bien :</span><br>
                                        <SELECT id="wilaya" name="wilaya"  class="inp_insc" onchange="filtre_daira()" required>
                                            <option value="" disabled selected> Wilaya</option>
                                            <option value="01-Tizi-Ouzou">Tizi-Ouzou</option>
                                            <option value="02-Béjaïa">Béjaïa</option>
                                            <option value="03-Bouira">Bouira</option>
                                            
                                        </SELECT><br> 
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
                                        </SELECT><br>                                    
                                        <!--*********   liste des communes de tizi ouzou   **********-->
                                        <SELECT id="commune"  name="commune" class="inp_insc"required>
                                            <option value="" disabled selected>Commune</option>                            
                                        </SELECT><br>

                                        <input type="text" name="adresse" class="inp_insc" placeholder="Adresse"><br>
                                        
                                    </div>
                                </div>


                                <div class="container_right">
                                    <div class="input_group">
                                        <span class="span_ajouter_bien">Caractéristiques du bien :</span><br>
                                        <SELECT name="type_bien" class="inp_insc"  required>
                                            <option value="" disabled selected>Type du bien</option>
                                            <option value="appartement">Appartement</option>
                                            <option value="studio">Studio</option>
                                            <option value="villa">Villa</option>
                                            <option value="niveau de villa">Niveau de villa</option>
                                            <option value="Local">Local</option>
                                            <option value="duplex">Duplex</option>
                                        
                                        </SELECT><br>
                                        <input type="number" name="surface" class="inp_insc" placeholder="Surface"><br>
                                        <input type="number" name="nbr_etages" class="inp_insc" placeholder="Nombre d'étages"><br>
                                        <input type="number" name="nbr_pieces" class="inp_insc" placeholder="Nombre de piéces"><br>
                                    </div>
                                        <span class="span_ajouter_bien">Prix du bien :</span><br>
                                        <input type="number" name="prix" class="inp_insc" placeholder="Prix du biens"><br>
                                        <span class="span_ajouter_bien">Propriétaire du bien :</span><br>
                                        <input type="text" name="proprio" class="inp_insc" placeholder="Propriétaire"><br>
                                        <span class="span_ajouter_bien">Ajouter des photos :</span><br>
                                        <input type="file" name="image_annonce"  ><br>
                                </div>
                            </div>
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
        
                                            echo "  <script>
                                            alert(\"Le bien a été Ajouté\");
                                            </script> ";
                                            
                                            
                                            //   insertion dans la base de donnee
                                            $insert=$db->prepare('INSERT INTO biens VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                                            $insert->execute(array($_POST["titre"],$_POST["description"],$_POST["wilaya"],$_POST["daira"],$_POST["commune"],$_POST["adresse"],$_POST["type_bien"],$_POST["surface"],$_POST["nbr_etages"],$_POST["nbr_pieces"],$_POST["prix"],$lien_img,$_POST["proprio"]));
                                            
                                        }


                                    ?>

                            </form>


                            
                            
                            
                            <?php
                        }
                        if($_GET["action"]=="ajouter_bien_loc"){
                            ?>
                            <div class="radio_vendre_louer">
                                <div class="radio_vendre">
                                    <a href="?action=ajouter_bien" class="input_radio " id="lien_vendre">Vente</a>
                                    
                                </div>
                                <div class="radio_louer">
                                <a href="?action=ajouter_bien_loc" class="input_radio" id="lien_louer">Location</a>
                                </div>
                            </div>
                            <form action="" enctype="multipart/form-data" method="post" class="form_admin" id="form_louer">
                                
                            
                            
                                <div class="ajouter_annonce">
                                <div class="container_left">
                                    <div class="input_group">
                                        <span class="span_ajouter_bien">Titre de l'annonce :</span><br>
                                        <input type="text" name="titre_loc" class="inp_insc" placeholder="Titre de l'annonce" require><br>
                                    </div>


                                    <textarea name="description_loc" cols="35"  rows="10" class="inp_insc" style="height:150px; resize: none;" placeholder="Description du bien" require></textarea><br>
                                    <!--*********   liste des dairas de tizi ouzou   **********-->

                                    <div class="input_group">
                                        <span class="span_ajouter_bien">Localisation du bien :</span><br>
                                        <SELECT id="wilaya" name="wilaya_loc"  class="inp_insc" onchange="filtre_daira()" required>
                                            <option value="" disabled selected> Wilaya</option>
                                            <option value="01-Tizi-Ouzou">Tizi-Ouzou</option>
                                            <option value="02-Béjaïa">Béjaïa</option>
                                            <option value="03-Bouira">Bouira</option>
                                            
                                        </SELECT><br> 
                                        <SELECT id="daira" name="daira_loc" class="inp_insc" onchange="filtre_commune_louer()" required>
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
                                        </SELECT><br>                                    
                                        <!--*********   liste des communes de tizi ouzou   **********-->
                                        <SELECT id="commune"  name="commune_loc" class="inp_insc"required>
                                            <option value="" disabled selected>Commune</option>                            
                                        </SELECT><br>

                                        <input type="text" name="adresse_loc" class="inp_insc" placeholder="Adresse"><br>
                                        
                                    </div>
                                </div>


                                <div class="container_right">
                                    <div class="input_group">
                                        <span class="span_ajouter_bien">Caractéristiques du bien :</span><br>
                                        <SELECT name="type_bien_loc" class="inp_insc"  required>
                                            <option value="" disabled selected>Type du bien</option>
                                            <option value="appartement">Appartement</option>
                                            <option value="studio">Studio</option>
                                            <option value="villa">Villa</option>
                                            <option value="niveau de villa">Niveau de villa</option>
                                            <option value="Local">Local</option>
                                            <option value="duplex">Duplex</option>
                                        
                                        </SELECT><br>
                                        <input type="number" name="surface_loc" class="inp_insc" placeholder="Surface"><br>
                                        <input type="number" name="nbr_etages_loc" class="inp_insc" placeholder="Nombre d'étages"><br>
                                        <input type="number" name="nbr_pieces_loc" class="inp_insc" placeholder="Nombre de piéces"><br>
                                    </div>
                                        <span class="span_ajouter_bien">Prix du bien :</span><br>
                                        <input type="number" name="prix_loc" class="inp_insc" placeholder="Prix du biens"><br>
                                        <span class="span_ajouter_bien">Propriétaire du bien :</span><br>
                                        <input type="text" name="proprio_loc" class="inp_insc" placeholder="Propriétaire"><br>
                                        <span class="span_ajouter_bien">Ajouter des photos :</span><br>
                                        <input type="file" name="image_annonce_loc"  ><br>
                                </div>
                                </div>
                                <input type="submit" value="Enregister" class="btn_inscr" name="submit_loc">
                            
                                    <?php
                                        if(isset($_POST["submit_loc"])){
                                            
                                            $dossier_upload = 'upload/'; // dossier où sera déplacé le fichier

                                            $tmp_fichier = $_FILES['image_annonce_loc']['tmp_name'];
        
                                            if( !is_uploaded_file($tmp_fichier) )
                                            {
                                                exit("Le fichier est introuvable");
                                            }
        
                                            // on vérifie  l'extension
        
                                            $type_file = $_FILES['image_annonce_loc']['type'];
        
                                            if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
                                            {
                                                exit("Le fichier n'est pas une image");
                                            }
                                            
                                            $select=$db->query('SELECT MAX(id) FROM demande_annonce');
        
                                                $id_img=$select->fetch();
                                                
                                            // on copie le fichier dans le dossier de destination
                                            $nom_fichier =$id_img[0].'_'.$_FILES['image_annonce_loc']['name'];
                                            //recuperer le lien de l'image
                                            $lien_img=$dossier_upload . $nom_fichier;
                                            if( !move_uploaded_file($tmp_fichier,"../".$dossier_upload . $nom_fichier) )
                                            {
                                                exit("Impossible de copier le fichier dans $dossier_upload");
                                            }
        
                                            echo "  <script>
                                            alert(\"Le bien a été Ajouté\");
                                            </script> ";
                                            
                                            
                                            //   insertion dans la base de donnee
                                            $insert=$db->prepare('INSERT INTO biens_location VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                                            $insert->execute(array($_POST["titre_loc"],$_POST["description_loc"],$_POST["wilaya_loc"],$_POST["daira_loc"],$_POST["commune_loc"],$_POST["adresse_loc"],$_POST["type_bien_loc"],$_POST["surface_loc"],$_POST["nbr_etages_loc"],$_POST["nbr_pieces_loc"],$_POST["prix_loc"],$lien_img,$_POST["proprio_loc"]));
                                            
                                        }


                                    ?>

                            </form>
                            <?php
                        }
                        //****************************  afficher et gerer tout les biens de vente*************** */
                        if($_GET["action"]=="gerer_biens"){
                            $select=$db->query('SELECT * FROM biens');
                            $select_loc=$db->query('SELECT * FROM biens_location');
                            
                            ?>
                            

                            <div class="radio_vendre_louer">
                                <div class="radio_vendre">
                                    <a href="?action=gerer_biens" class="input_radio " id="lien_vendre">Vente</a>
                                    
                                </div>
                                <div class="radio_louer">
                                <a href="?action=gerer_biens_loc" class="input_radio" id="lien_louer">Location</a>
                                </div>
                            </div>

                            <div class="form_admin" id="form_vendre">
                                
                                <div style="height: 500px;overflow: auto;">
                                    <table class="liste_biens" cellpadding="3" rules="all">
                                        <colgroup span="6" class="columns"></colgroup>
                                        <tr>
                                            <th class="colonne_tab">Titre</th> 
                                            <th class="colonne_tab">Wilaya</th>                                           
                                            <th class="colonne_tab">Daïra</th>
                                            <th class="colonne_tab">Commune</th>
                                            <th class="colonne_tab">Surface</th>
                                            <th class="colonne_tab">Etages</th>
                                            <th class="colonne_tab">Prix</th>
                                            <th class="colonne_tab">Propriétaire</th>
                                        </tr>
                                        <?php
                                        
                                        while($donnees=$select->fetch()){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $donnees["titre"] ?></td>
                                                <td><?php echo $donnees["wilaya"] ?></td>
                                                <td><?php echo $donnees["daira"] ?></td>
                                                <td><?php echo $donnees["commune"] ?></td>
                                                <td><?php echo $donnees["surface"] ?></td>
                                                <td><?php echo $donnees["etage"] ?></td>
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
                                    <script>
                                    alert("Le bien a été Supprimer");
                                    </script>
                                    <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_biens" />
                                    <?php
                                    }
                                    
                                    
                                    //***************************modifier ************************//
                                    if($_GET["action2"]=="modifier"){
                                    

                                        $select=$db->query("SELECT titre FROM biens WHERE id=$id");
                                        $donnees=$select->fetch();
                                        ?>
                                        <div class="modifier_bien" id="mama">
                                            <h3>Modification du bien : <?php echo $donnees[0]; ?></h3><br>
                                            <form action="" method="post">
                                                <input list="champ_a_modifier" name="champ_modifier" placeholder="Champ à modifier" class="inp_insc" required">            
                                                    <datalist id="champ_a_modifier">
                                                    <option value="titre">
                                                    <option value="wilaya">                                                      
                                                    <option value="daira">
                                                    <option value="commune">
                                                    <option value="surface">
                                                    <option value="etage">
                                                    <option value="prix">
                                                    <option value="proprietaire">
                                                    </datalist> 
                                                <br>
                                                <input type="text" name="modification" placeholder="Modification" class="inp_insc" ><br>
                                                <input type="submit" name="valider_modification" class="valider_btn" value="Valider">
                                                
                                                <?php 
                                                    if(isset($_POST["valider_modification"])){
                                                        
                                                        $champ_modifier=$_POST["champ_modifier"];
                                                        $modification=$_POST['modification'];
                                                        echo $champ_modifier;
                                                        $modifier=$db->prepare("UPDATE biens SET $champ_modifier='$modification' WHERE id=$id");
                                                        $modifier->execute();

                                                        ?>
                                                        <script> alert("Le bien a été Modifié"); </script>
                                                        <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_biens" />
                                                        <?php
                                                        
                                                    }
                                                ?>
                                            </form>
                                            <button id="fermer" onclick="fermer_modifier_bien()">Fermer</button>
                                        </div>
                                        <?php
                                    }
                                }
                            ?>    

                            
                            <?php 
                                
                                ?>               


                                <?php
                                } 
                        //******************************afficher et gerer tout les biens de loction */
                        if($_GET["action"]=="gerer_biens_loc"){


                            ?>
                            <div class="radio_vendre_louer">
                                <div class="radio_vendre">
                                    <a href="?action=gerer_biens" class="input_radio " id="lien_vendre">Vente</a>
                                    
                                </div>
                                <div class="radio_louer">
                                <a href="?action=gerer_biens_loc" class="input_radio" id="lien_louer">Location</a>
                                </div>
                            </div>
                            <div class="form_admin" id="form_louer">
                            
                            <div style="height: 500px; overflow: auto;">
                                <table class="liste_biens" cellpadding="3" rules="all">
                                    <colgroup span="6" class="columns"></colgroup>
                                    <tr>
                                        <th class="colonne_tab">Titre</th>
                                        <th class="colonne_tab">Wilaya</th>
                                        <th class="colonne_tab">Daïra</th>
                                        <th class="colonne_tab">Commune</th>
                                        <th class="colonne_tab">Surface</th>
                                        <th class="colonne_tab">Etages</th>
                                        <th class="colonne_tab">Prix</th>
                                        <th class="colonne_tab">Propriétaire</th>
                                    </tr>
                                    <?php
                                    $select_loc=$db->query("SELECT * FROM biens_location ");
                                        
                                    while($donnees_loc=$select_loc->fetch()){
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $donnees_loc["titre"] ?></td>
                                            <td><?php echo $donnees_loc["wilaya"] ?></td>
                                            <td><?php echo $donnees_loc["daira"] ?></td>
                                            <td><?php echo $donnees_loc["commune"] ?></td>
                                            <td><?php echo $donnees_loc["surface"] ?></td>
                                            <td><?php echo $donnees_loc["etage"] ?></td>
                                            <td><?php echo $donnees_loc["prix"] ?> DA</td>
                                            <td><?php echo $donnees_loc["proprietaire"] ?></td>
                                            <td><a href="?action=gerer_biens_loc&amp;action2=modifier_loc&amp;id=<?php echo $donnees_loc["id"]; ?>" title="Modifier le bien"class="icon_supprimer" style="color:green;"><i class="far fa-edit"></i></a></td>
                                            <td><a href="?action=gerer_biens_loc&amp;action2=supprimer_loc&amp;id=<?php echo $donnees_loc["id"]; ?>" title="Supprimer le bien"class="icon_supprimer "><i class="far fa-trash-alt"></i></a></td>
                                            
                                        </tr>

                                        <?php
                                    }
                                //********************  supprimer ou modifier des biens    **************************** */
                                if(isset($_GET["action2"])){
                                    $id=$_GET["id"];
                                    //supprimer
                                    if($_GET["action2"]=="supprimer_loc"){
                                    
                                    $supprimer=$db->prepare("DELETE FROM biens_location WHERE id = $id");
                                    $supprimer->execute();
                                    ?>
                                    <script>
                                    alert("Le bien a été Supprimer");
                                    </script>
                                    <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_biens_loc" />
                                    <?php
                                    }
                                    
                                    
                                    //***************************modifier ************************//
                                    if($_GET["action2"]=="modifier_loc"){
                                    

                                        $select=$db->query("SELECT titre FROM biens_location WHERE id=$id");
                                        $donnees=$select->fetch();
                                        ?>
                                        <div class="modifier_bien">
                                            <h3>Modification du bien : <?php echo $donnees[0]; ?></h3><br>
                                            <form action="" method="post">
                                                <input list="champ_a_modifier" name="champ_modifier" placeholder="Champ à modifier" class="inp_insc" required">            
                                                    <datalist id="champ_a_modifier">
                                                    <option value="titre">
                                                    <option value="wilaya">
                                                    <option value="daira">
                                                    <option value="commune">
                                                    <option value="prix">
                                                    <option value="surface">
                                                    <option value="etage">
                                                    <option value="proprietaire">
                                                    </datalist> 
                                                <br>
                                                <input type="text" name="modification" placeholder="Modification" class="inp_insc" required><br>
                                                <input type="submit" name="valider_modification" class="valider_btn" id="btn_valider" value="Valider">

                                                <?php 
                                                    if(isset($_POST["valider_modification"])){
                                                        
                                                        $champ_modifier=$_POST["champ_modifier"];
                                                        $modification=$_POST['modification'];
                                                        echo $champ_modifier;
                                                        $modifier=$db->prepare("UPDATE biens_location SET $champ_modifier='$modification' WHERE id=$id");
                                                        $modifier->execute();

                                                        ?>
                                                        <script> alert("Le bien a été Modifié"); </script>
                                                        <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_biens_loc" />
                                                        <?php
                                                        
                                                    }
                                                ?>
                                            </form>
                                            <button id="fermer" onclick="fermer_modifier_bien()">Fermer</button>
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
                        //****************************  afficher et gerer toutes les demande de vente *************** */
                        if($_GET["action"]=="confirmer_annonces"){
                            $select=$db->query('SELECT * FROM demande_annonce');
                            
                            ?>
                            <!--                       boutton radio                           -->
                            <div class="radio_vendre_louer">
                                <div class="radio_vendre">
                                    <a href="?action=confirmer_annonces" class="input_radio " id="lien_vendre">Vente</a>
                                    
                                </div>
                                <div class="radio_louer">
                                <a href="?action=confirmer_annonces_loc" class="input_radio" id="lien_louer">Location</a>
                                </div>
                            </div>
                            <!--   **************  liste des biens à vendre     -->
                            <div class="form_admin" id="form_vendre">
                                
                                <div style="height: 500px; overflow: auto;">
                                    <table class="liste_biens" cellpadding="3" rules="all">
                                        <colgroup span="6" class="columns"></colgroup>
                                        <tr>
                                            <th class="colonne_tab">Titre</th>                                            
                                            <th class="colonne_tab">Wilaya</th>
                                            <th class="colonne_tab">Daïra</th>
                                            <th class="colonne_tab">Commune</th>
                                            <th class="colonne_tab">Surface</th>
                                            <th class="colonne_tab">Etages</th>
                                            <th class="colonne_tab">Propriétaire</th>
                                        </tr>
                                        <?php
                                        
                                        while($donnees=$select->fetch()){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $donnees["titre"] ?></td>
                                                
                                                <td><?php echo $donnees["wilaya"] ?></td>
                                                <td><?php echo $donnees["daira"] ?></td>
                                                <td><?php echo $donnees["commune"] ?></td>
                                                <td><?php echo $donnees["surface"] ?></td>
                                                <td><?php echo $donnees["etage"] ?></td>
                                                <td><?php echo $donnees["proprietaire"] ?></td>
                                                <td><a href="?action=confirmer_annonces&amp;action2=plus&amp;id=<?php echo $donnees["id"]; ?>" title="Voir plus"class="icon_supprimer" style="color:blue;"><i class="fas fa-plus" ></i></a></td>
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
                                                    $insert=$db->prepare('INSERT INTO biens VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                                                    $insert->execute(array($donnees["titre"],$donnees["description"],$donnees["wilaya"],$donnees["daira"],$donnees["commune"],$donnees["adresse"],$donnees["type_bien"],$donnees["surface"],$donnees["etage"],$donnees["pieces"],$donnees["prix"],$donnees["lien_img"],$donnees["proprietaire"]));
                                                    $supprimer=$db->prepare("DELETE FROM demande_annonce WHERE id = $id");
                                                    $supprimer->execute();
                                                    ?>
                                                    <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=confirmer_annonces" />
                                                    <script> alert("La demande d'annonce a été Accepter");  </script>
                                                    <?php
                                                }
                                
                                            }
                                            //supprimer
                                            if($_GET["action2"]=="supprimer"){
                                                $id=$_GET["id"];
                                                $supprimer=$db->prepare("DELETE FROM demande_annonce WHERE id = $id");
                                                $supprimer->execute();
                                                ?>
                                                <script> alert("La demande d'annonce a été Refuser");  </script>
                                                <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=confirmer_annonces" />
                                                <?php
                                            }
                                            //voir plus
                                            if($_GET["action2"]=="plus"){
                                                $id=$_GET["id"];
                                                $select=$db->query("SELECT * FROM demande_annonce WHERE id=$id");
                                                
                                                $donnees=$select->fetch();
                                                ?>
                                                <div class="box_voir_plus">
                                                <button id="fermer"  onclick="fermer_voir_plus()"><i class="fas fa-times" value="fermer" ></i></button>
                                                <div style="margin-top: 30px;">
                                                <span class="span_voir_plus">Titre :</span><span class="span_info"><?php echo $donnees["titre"] ?></span><br>
                                                <span class="span_voir_plus">Wilaya :</span><span class="span_info"><?php echo $donnees["wilaya"] ?></span><br>
                                                <span class="span_voir_plus">Daïra :</span><span class="span_info"><?php echo $donnees["daira"] ?></span><br>
                                                <span class="span_voir_plus">Commune :</span><span class="span_info"><?php echo $donnees["commune"] ?></span><br>
                                                <span class="span_voir_plus">Adresse :</span><span class="span_info"><?php echo $donnees["adresse"] ?></span><br>
                                                <span class="span_voir_plus">Type du bien :</span class="span_info"><span><?php echo $donnees["type_bien"] ?></span><br>
                                                <span class="span_voir_plus">Surface :</span><span class="span_info"><?php echo $donnees["surface"] ?></span><br>
                                                <span class="span_voir_plus">Etage(s) :</span><span class="span_info"><?php echo $donnees["etage"] ?></span><br>
                                                <span class="span_voir_plus">Piéce(s) :</span><span class="span_info"><?php echo $donnees["pieces"] ?></span><br>
                                                <span class="span_voir_plus">Prix :</span><span class="span_info"><?php echo $donnees["prix"] ?> DA</span><br>
                                                <span class="span_voir_plus">Propriétaire :</span class="span_info"><span><?php echo $donnees["proprietaire"] ?></span><br>
                                                </div>
                                                <img src="../<?php echo $donnees["lien_img"] ?>" alt="image annonce" width="448px" height="202px" class="img_voir_plus">

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
                        //*******************************afficher et gerer toutes les demmandes de location */
                        if($_GET["action"]=="confirmer_annonces_loc"){
                            $select_loc=$db->query('SELECT * FROM demande_annonce_location');
                            ?>
                            <div class="radio_vendre_louer">
                                <div class="radio_vendre">
                                    <a href="?action=confirmer_annonces" class="input_radio " id="lien_vendre">Vente</a>
                                    
                                </div>
                                <div class="radio_louer">
                                <a href="?action=confirmer_annonces_loc" class="input_radio" id="lien_louer">Location</a>
                                </div>
                            </div>
                            <!--   **************  liste des biens à louer  ***********   -->          
                            <div class="form_admin" id="form_louer">
                            
                            <div style="height: 500px;  overflow: auto;">
                                <table class="liste_biens" cellpadding="3" rules="all">
                                    <colgroup span="6" class="columns"></colgroup>
                                    <tr>
                                        <th class="colonne_tab">Titre</th>                                        
                                        <th class="colonne_tab">Wilaya</th>
                                        <th class="colonne_tab">Daïra</th>
                                        <th class="colonne_tab">Commune</th>
                                        <th class="colonne_tab">Surface</th>
                                        <th class="colonne_tab">Etages</th>
                                        <th class="colonne_tab">Propriétaire</th>
                                    </tr>
                                    <?php
                                    
                                    while($donnees_loc=$select_loc->fetch()){
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $donnees_loc["titre"] ?></td>
                                            
                                            <td><?php echo $donnees_loc["wilaya"] ?></td>
                                            <td><?php echo $donnees_loc["daira"] ?></td>
                                            <td><?php echo $donnees_loc["commune"] ?></td>
                                            <td><?php echo $donnees_loc["surface"] ?></td>
                                            <td><?php echo $donnees_loc["etage"] ?></td>
                                            <td><?php echo $donnees_loc["proprietaire"] ?></td>
                                            <td><a href="?action=confirmer_annonces_loc&amp;action2=plus_loc&amp;id=<?php echo $donnees_loc["id"]; ?>" title="Voir plus"class="icon_supprimer" style="color:blue;"><i class="fas fa-plus" ></i></a></td>
                                            <td><a href="?action=confirmer_annonces_loc&amp;action2=accepter_loc&amp;id=<?php echo $donnees_loc["id"]; ?>" title="Accepter l'annonce"class="icon_supprimer" style="color:green;"><i class="fas fa-check" ></i></a></td>
                                            <td><a href="?action=confirmer_annonces_loc&amp;action2=supprimer_loc&amp;id=<?php echo $donnees_loc["id"]; ?>" title="Refuser l'annoce"class="icon_supprimer "><i class="fas fa-times" ></i></a></td>
                                            
                                        </tr>

                                        <?php
                                    }

                                    //**************************    accepter et supprimerl'annonce *********************** */
                                    if(isset($_GET["action2"])){
                                        //accepter
                                        if($_GET["action2"]=="accepter_loc"){
                                            
                                        $id=$_GET["id"];
                                        $select=$db->query("SELECT * FROM demande_annonce_location WHERE id=$id");
                                        while($donnees=$select->fetch()){
                                            $insert=$db->prepare('INSERT INTO biens_location VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                                            $insert->execute(array($donnees["titre"],$donnees["description"],$donnees["wilaya"],$donnees["daira"],$donnees["commune"],$donnees["adresse"],$donnees["type_bien"],$donnees["surface"],$donnees["etage"],$donnees["pieces"],$donnees["prix"],$donnees["lien_img"],$donnees["proprietaire"]));
                                            $supprimer=$db->prepare("DELETE FROM demande_annonce_location WHERE id = $id");
                                            $supprimer->execute();
                                            ?>
                                            <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=confirmer_annonces" />
                                            <script> alert("La demande d'annonce a été Accepter");  </script>
                                            <?php
                                        }
                            
                                        }
                                        //supprimer
                                        if($_GET["action2"]=="supprimer_loc"){
                                            $id=$_GET["id"];
                                            $supprimer=$db->prepare("DELETE FROM demande_annonce_location WHERE id = $id");
                                            $supprimer->execute();
                                            ?>
                                            <script> alert("La demande d'annonce a été Refuser");  </script>
                                            <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=confirmer_annonces" />
                                            <?php
                                        }
                                        
                                        if($_GET["action2"]=="plus_loc"){                                            
                                            $id=$_GET["id"];
                                            $select=$db->query("SELECT * FROM demande_annonce_location WHERE id=$id");
                                            $donnees_loc=$select->fetch();
                                            ?>
                                            <div class="box_voir_plus">
                                                <button id="fermer"  onclick="fermer_voir_plus()"><i class="fas fa-times" value="fermer" ></i></button>
                                                <div style="margin-top: 30px;">
                                                <span class="span_voir_plus">Titre :</span><span class="span_info"><?php echo $donnees_loc["titre"] ?></span><br>
                                                <span class="span_voir_plus">Wilaya :</span><span class="span_info"><?php echo $donnees_loc["wilaya"] ?></span><br>
                                                <span class="span_voir_plus">Daïra :</span><span class="span_info"><?php echo $donnees_loc["daira"] ?></span><br>
                                                <span class="span_voir_plus">Commune :</span><span class="span_info"><?php echo $donnees_loc["commune"] ?></span><br>
                                                <span class="span_voir_plus">Adresse :</span><span class="span_info"><?php echo $donnees_loc["adresse"] ?></span><br>
                                                <span class="span_voir_plus">Type du bien :</span class="span_info"><span><?php echo $donnees_loc["type_bien"] ?></span><br>
                                                <span class="span_voir_plus">Surface :</span><span class="span_info"><?php echo $donnees_loc["surface"] ?></span><br>
                                                <span class="span_voir_plus">Etage(s) :</span><span class="span_info"><?php echo $donnees_loc["etage"] ?></span><br>
                                                <span class="span_voir_plus">Piéce(s) :</span><span class="span_info"><?php echo $donnees_loc["pieces"] ?></span><br>
                                                <span class="span_voir_plus">Prix :</span><span class="span_info"><?php echo $donnees_loc["prix"] ?> DA</span><br>
                                                <span class="span_voir_plus">Propriétaire :</span class="span_info"><span><?php echo $donnees_loc["proprietaire"] ?></span><br>
                                                </div>
                                                <img src="../<?php echo $donnees_loc["lien_img"] ?>" alt="image annonce" width="448px" height="202px" class="img_voir_plus">

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
                        //*******************************afficher le formulaire ajouter des RDV************ */
                        if($_GET["action"]=="ajouter_rdv"){
                            ?>

                            
                            <form action="" method="post" class="form_admin">
                                
                                <input type="text" name="client" class="inp_insc" placeholder="Client" ><br>
                                <input type="text" name="lieu" class="inp_insc" placeholder="Lieu du rendez-vous"><br>
                                <span class="span_ajouter_bien">Date et heure du rendez-vous :</span>
                                <input type="date" name="date_rdv" min="<?php $date=date('Y-m-d', strtotime(' +1 day')); echo($date); ?>" class="inp_insc">
                                <input type="time" name="time_rdv" class="inp_insc" min="08:00" max="18:00" ><br>
                                
                                
                                <input type="submit" value="Enregister" class="btn_inscr btn_ajouter_rdv" name="submit">
                                    <?php
                                        if(isset($_POST["submit"])){
                                            $date=$_POST["date_rdv"];
                                            $timerdv=$_POST["time_rdv"];

                                            //   insertion dans la base de donnee
                                            $insert=$db->prepare('INSERT INTO rdv_confirmer VALUES(NULL,?,?,?,?)');
                                            $insert->execute(array($_POST["client"],$_POST["lieu"],$date,$timerdv));
                                            echo("<script> alert(\"Le RDV a été Enregistrer\");  </script>");
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
                                        
                                     } ?>
                                     <div style="height: 500px; width: 700px; overflow: auto;">
                                    <table class="liste_biens" cellpadding="3" rules="all">
                                            <colgroup span="4" class="columns"></colgroup>
                                            <tr>
                                            <th class="colonne_tab">Client</th>
                                            <th class="colonne_tab">Lieu</th>
                                            <th class="colonne_tab">Date</th>
                                            <th class="colonne_tab">heur</th>
                                            
                                            </tr>
                                          <?php
                                        
                                         while($donnees=$select->fetch()){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $donnees["client"] ?></td>
                                                <td><?php echo $donnees["lieu"] ?></td>
                                                <td><?php echo $donnees["date"] ?></td>
                                                <td><?php echo $donnees["heur"] ?></td>
                                                <td><a href="?action=gerer_rdv&action2=modifier&id=<?php echo $donnees["id"]; ?>" title="Modifier le rdv" class="icon_supprimer" style="color:green;"><i class="far fa-edit"></i></a></td>
                                                <td><a href="?action=gerer_rdv&action2=supprimer&id=<?php echo $donnees["id"]; ?>" title="Supprimer le rdv" class="icon_supprimer"><i class="far fa-trash-alt"></i></a></td>
                                                
                                            </tr>
                                            
        
                                            <?php
                                        }
                                        ?>
                                        </table>
                               
                               </div>
                               </form>
                               <?php
                                
                                        //********************  supprimer des rdv    **************************** */
                                if(isset($_GET["action2"])){ 
                                    $id=$_GET["id"];
                                        if($_GET["action2"]=="supprimer"){
                                           
                                            $supprimer=$db->prepare("DELETE FROM rdv_confirmer WHERE id = $id");
                                            $supprimer->execute();
                                            echo "aaaaaa";
                                            ?>
                                            <script> alert("Le RDV a été Supprimer");  </script>
                                            <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=gerer_rdv" />
                                            <?php

                                        }
                                        //***************************modifier RDV ************************//
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
                                                <input type="text" name="modification2" placeholder="Modification" class="inp_insc" required><br>
                                                <input type="submit" name="valider_modification" value="Valider">

                                                <?php 
                                                    if(isset($_POST["valider_modification"])){
                                                        
                                                        $champ_modifier=$_POST["champ_modifier2"];
                                                        $modification=$_POST['modification2'];
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
                            }
                               ?>      
                            
                            <?php
                        }
                        //****************************  afficher et gerer toutes les demande de RDV *************** */
                        if($_GET["action"]=="confirmer_rdv"){
                            $select=$db->query('SELECT * FROM demande_rdv');
                            ?>
                            <div class="form_admin">
                            
                                <div style="height: 500px; width: 650px; overflow: auto;">
                                    <table class="liste_biens" cellpadding="3" rules="all">
                                        <colgroup span="6" class="columns" ></colgroup>
                                        <tr>
                                            <th class="colonne_tab">Client</th>
                                            <th class="colonne_tab">Lieu</th>
                                            <th class="colonne_tab">Date</th>
                                            <th class="colonne_tab">Heure</th>
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
                                                $insert=$db->prepare('INSERT INTO rdv_confirmer VALUES(NULL,?,?,?,?)');
                                                $insert->execute(array($donnees["client"],$donnees["lieu"],$donnees["date"],$donnees["time"]));
                                                $supprimer=$db->prepare("DELETE FROM demande_rdv WHERE id = $id");
                                                $supprimer->execute();
                                                ?>
                                                <script> alert("La demande de RDV a été Accepter");  </script>
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
                                                <script> alert("La demande de RDV a été Refusé");  </script>
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
                            
                            <div style="height: 500px; width: 650px; overflow: auto;">
                                <table class="liste_biens" cellpadding="3" rules="all">
                                    <colgroup span="4" class="columns"></colgroup>
                                    <tr>
                                        <th class="colonne_tab">Nom</th>
                                        <th class="colonne_tab">Prénom</th>
                                        <th class="colonne_tab">E-mail</th>
                                        <th class="colonne_tab">Tel</th>    
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
                                        <script> alert("Le client a été Supprimer de la liste");  </script>
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
                                        <th class="colonne_tab">Nom</th>
                                        <th class="colonne_tab">Prénom</th>
                                        <th class="colonne_tab">E-mail</th>
                                        <th class="colonne_tab">Sujet</th> 
                                        <th class="colonne_tab">Message</th>   
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
                                        <script> alert("Le message a été Supprimer");  </script>
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
                        if($_GET["action"]=="demenagement"){
                            $select=$db->query('SELECT * FROM demande_rdv_dem');

                            
                            ?>
                            <div class="form_admin">
                            
                                <div style="height: 500px; overflow: auto;">
                                    <table class="liste_biens" cellpadding="3" rules="all">
                                        <colgroup span="6" class="columns" ></colgroup>
                                        <tr>
                                            <th class="colonne_tab">Client</th>
                                            <th class="colonne_tab">E-mail</th>
                                            <th class="colonne_tab">Tel</th>
                                            <th class="colonne_tab">Adresse</th>
                                            <th class="colonne_tab">Date</th>
                                            
                                        </tr>
                                        <?php
                                        
                                        while($donnees=$select->fetch()){
                                            $id_cl=$donnees["id_cl"];
                                            $select_client=$db->query("SELECT * FROM clients WHERE id=$id_cl");
                                            $donnees_cl=$select_client->fetch();
                                            ?>
                                            <tr>
                                                <td><?php echo $donnees_cl["nom"].' '.$donnees_cl["prenom"] ?></td>
                                                <td><?php echo $donnees_cl["email"] ?></td>
                                                <td><?php echo $donnees_cl["tel"] ?></td>
                                                <td><?php echo $donnees["lieu"] ?></td>
                                                <td><?php echo $donnees["date"] ?></td>
                                                                                               
                                                <td><a href="?action=demenagement&amp;action2=supprimer&amp;id=<?php echo $donnees["id"]; ?>" title="supprimer le demenagement"class="icon_supprimer "><i class="fas fa-times" ></i></a></td>
                                                
                                            </tr>

                                            <?php
                                        }

                                        //**************************    accepter et supprimerl'annonce *********************** */
                                        if(isset($_GET["action2"])){
                                            
                                         
                                            //supprimer
                                            if($_GET["action2"]=="supprimer"){
                                                $id=$_GET["id"];
                                                echo $_GET["id"];
                                                $supprimer=$db->prepare("DELETE FROM demande_rdv_dem WHERE id = $id");
                                                $supprimer->execute();
                                                ?>
                                                <script> alert("La demande de demenagement a été refusé");  </script>
                                                <meta http-equiv="refresh" content="0;url=./plateforme_admin.php?action=demenagement" />
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
 window.onload =style_vendre_location_admin();
 window.onload =style_vendre_location_admin2()

window.onload = afficher_formulaire();
 
 </script> 


</body>
</html>



