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
    $db=new PDO('mysql:host=localhost;dbname=vilavie','root','');  
        if(($_SESSION["nom_admin"]!="user")||($_SESSION["psw_admin"]!="1234")){
            header("location: ./index.php");
        }
    ?>
    
    <!--**************************************Menu administrateur **********************************-->
    <nav class="menu_admin">
        <input type="image" src="../images/user.png" alt="photo de profile" class="photo_profil">
        <h2 class="nom_admin">NOM Prenom </h2>
        <hr color="black">
        <a href="?action=ajouter_bien" class="onglet_admin">Ajouter un bien</a>
        <a href="?action=gerer_biens" class="onglet_admin">Gerer les biens</a>
        <a href="?action=confirmer_annonces" class="onglet_admin" style="height:35px">Confirmer les annonces</a>
        
        <hr color="black">
        <a href="?action=ajouter_rdv" class="onglet_admin onglet_rdv">Ajouter un RDV</a>
        <a href="" class="onglet_admin onglet_rdv">Gérer les RDV</a>
        <a href="" class="onglet_admin onglet_rdv">Confirmer les RDV</a>

        <hr color="black">
        <a href="?action=clients" class="onglet_admin onglet_client">Clients</a>
        </nav>

        <div class="container">
            <header class="header_admin">
            <h1 class="titre_plfrm">Plateforme Administrateur</h1>
            <div class="container_icon">
                <a href=""class="icon_header" title="Messages"><i class="fas fa-comments"></i></a>
                <a href="" class="icon_header" title="Déconnexion"><i class="fas fa-sign-out-alt"></i></a>
            </div>
            </header>
        <!--*****************************************Page admin*******************************************-->
            <div class="page_admin">
                <?php
                    if(isset($_GET["action"])){
                        //***************************affichage du formulaire ajouter un bien ************  */
                        if($_GET["action"]=="ajouter_bien"){
                            ?>

                            
                            <form action="" method="post" class="form_admin">
                                <h2>Ajouter un bien :</h2>
                                <input type="text" name="titre" class="inp_insc" placeholder="Titre" require><br>
                                <textarea name="description" cols="35"  rows="10" class="inp_insc" style="height:150px; resize: none;" placeholder="Description du bien" require></textarea><br>
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
                                <input list="commune" name="commune" class="inp_insc" placeholder="Commune" require><br>
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
                                <input type="submit" value="Enregister" class="btn_inscr" name="submit">
                                    <?php
                                        if(isset($_POST["submit"])){
                                            //pas d'image pour l'instant-------------
                                            
                                            
                                            //   insertion dans la base de donnee
                                            $insert=$db->prepare('INSERT INTO biens VALUES(NULL,?,?,?,?,?,?)');
                                            $insert->execute(array($_POST["titre"],$_POST["description"],$_POST["daira"],$_POST["commune"],$_POST["surface"],$_POST["nbr_etages"]));
                                            
                                        }


                                    ?>

                            </form>
                            
                            
                            <?php
                        }
                        //****************************  afficher tout les biens de l'agence*************** */
                        if($_GET["action"]=="gerer_biens"){
                            $select=$db->query('SELECT * FROM biens');
                            ?>
                            <div class="form_admin">
                            <h2>Liste des biens :</h2>
                            <table class="liste_biens" cellpadding="3" rules="all">
                                <colgroup span="6" class="columns"></colgroup>
                                <tr>
                                    <th>Titre</th>
                                    <th>Surface</th>
                                    <th>Etages</th>
                                    <th>Daïra</th>
                                    <th>Commune</th>
                                    <th>Action</th>
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
                                        <td><a href="?action=gerer_biens&action2=modifier&id=<?php echo $donnees["id"]; ?>" title="Modifier le bien">Modifier</a> 
                                            <a href="?action=gerer_biens&action2=supprimer&id=<?php echo $donnees["id"]; ?>" title="Supprimer le bien"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                    <?php
                                }

                                //********************  supprimer des biens    **************************** */
                                
                                if(isset($_GET["action2"])=="supprimer"){
                                    $id=$_GET["id"];
                                    $supprimer=$db->prepare("DELETE FROM biens WHERE id = $id");
                                    $supprimer->execute();
                                }
                                
                                ?>
                                
                                
                            </table>
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
                                <input type="date" name="date_rdv" class="inp_insc">
                                <span>Heure du rendez-vous :</span>
                                <input type="time" name="heure_rdv" class="inp_insc" ><br>
                                
                                <input type="submit" value="Enregister" class="btn_inscr" name="submit">
                                    <?php
                                        if(isset($_POST["submit"])){
                                            $date=$_POST["date_rdv"];
                                            $heure=$_POST["heure_rdv"];

                                            //   insertion dans la base de donnee
                                            $insert=$db->prepare('INSERT INTO rdv_confirmer VALUES(NULL,?,?,?)');
                                            $insert->execute(array($_POST["client"],$_POST["lieu"],$date.' '.$heure));
                                            
                                        }


                                    ?>

                            </form>
                            
                            
                            <?php
                        }
                        //****************************  afficher tout les biens de l'agence*************** */
                        if($_GET["action"]=="clients"){
                            $select=$db->query('SELECT * FROM clients');
                            ?>
                            <div class="form_admin">
                            <h2>Liste des clients :</h2>
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
                                        <td><a href="?action=clients&action2=modifier&id=<?php echo $donnees["id"]; ?>" title="Modifier le bien">Modifier</a> 
                                            <a href="?action=clients&action2=supprimer&id=<?php echo $donnees["id"]; ?>" title="Supprimer le bien"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                    <?php
                                }

                                //********************  supprimer des biens    **************************** */
                                
                                if(isset($_GET["action2"])=="supprimer"){
                                    $id=$_GET["id"];
                                    $supprimer=$db->prepare("DELETE FROM clients WHERE id = $id");
                                    $supprimer->execute();
                                }
                                
                                ?>
                                
                                
                            </table>
                            </div>
                            <?php
                        } 

                    }
                ?>   
            </div>

        </div>
        
</body>
</html>
