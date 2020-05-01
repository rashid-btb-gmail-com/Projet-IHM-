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
include_once("../includes/header.php");
//    connexion a la base de donnee  
$db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
<div class="fulldepose" id="depose">
    <div class="container h-100">
        <div class="deposeheader" >
         <h1> Vous Souhaitez Vendre un Bien Immobilier</h1>
         <h3>Remplissez ce Formualaire, Notre Agence s'en Occupera</h3>
        </div>
		<div class="d-flex justify-content-center h-100">
			<div class="user_card" id="user_card_annonce">
				<div class="d-flex justify-content-center">
					
						<img src="../images/logo.png" class="brand_logo" alt="Logo">
					
                </div>
                <h2 class="titre_connexion">Déposer une annonce </h2>
				<div class="d-flex justify-content-center form_container">
					
                <form enctype="multipart/form-data" action="" method="post" class="form_inscription">
                        
                        
                        <div class="input-group mb-3">
                        <input type="text" name="titre" class="form-control input_user" placeholder="Titre" require><br>
                        </div>

                        <textarea name="description" cols="35"  rows="10" class="discription_annonce" placeholder="Description du bien" required></textarea><br>
                        <!--*********   liste des dairas de tizi ouzou   **********-->
                        
                        <div class="input-group mb-3">
                        <span></span>
                            <SELECT id="daira" name="daira" class="form-control input_user" onchange="filtre_commune()" required>
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
                        </div>
                        <div class="input-group mb-3"> 
                            <span></span>
                            <SELECT id="commune"  name="commune" class="form-control input_user"required>
                                <option value="" disabled selected>Commune</option>
                            
                            </SELECT>


                        </div>
                        <div class="input-group mb-3">
                        <input type="number" name="surface" class="form-control input_user" placeholder="Surface">
                        </div>
                        <div class="input-group mb-3">
                        <input type="number" name="nbr_etages" class="form-control input_user" placeholder="Nombre d'étages">
                        </div>
                        <div class="input-group mb-3">
                        <input type="number" name="prix" class="form-control input_user" placeholder="Prix du bien en DA">
                        </div>
                        <div class="input-group mb-3">
                        <input type="file" name="image_annonce" class="btn login_btn" id="btn_image" ><br>
                        </div>
                        <div class="input-group mb-3">
                        <input type="submit" value="Envoyer" class="btn login_btn" name="submit">
                        </div>
                        
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
                                $insert=$db->prepare('INSERT INTO demande_annonce VALUES(NULL,?,?,?,?,?,?,?,?)');
                                $insert->execute(array($_POST["titre"],$_POST["description"],$_POST["daira"],$_POST["commune"],$_POST["surface"],$_POST["nbr_etages"],$_POST["prix"],$lien_img));
                                
                            }


                        ?>

                </form>



				</div>
		
				
			</div>
		</div>
	</div>
   </div>

<script src="../js/js.js"></script>
</body>
</html>