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
         <title>Deposer une annonce - Axxamiw </title>
         <!--icon du site-->
         <link rel="icon" href="../images/icon/home.ico">
         <!--feuilles de style-->
         <link rel="stylesheet" href="../style/style.css">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
       </head>
<body>
<?php
include_once("../includes/header.php");
//    connexion a la base de donnee  
$db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
if(!isset($_SESSION['id'])){
    if(isset($_SESSION["username"])){
    $username=$_SESSION["username"];
    $iddata= $db->query('SELECT * FROM clients WHERE username="'.$username.'"');
    $idset = $iddata->fetch(); 
     $_SESSION["id"]=$idset["id"];
    }
  }
if(!isset($_SESSION["username"])){
    
    header("location:./connexion.php");
}
else{
?>
<div class="fulldepose" id="depose">
    <div class="container h-100">
        <div class="deposeheader" >
         
         <h1>Remplissez ce Formualaire </h1>
        </div>
		<div class="d-flex justify-content-center h-100">
			<div class="user_card" id="user_card_annonce">
				<div class="d-flex justify-content-center">
					
						<img src="../images/logo.png" class="brand_logo" alt="Logo">
					
                </div>

                <!--   radio vendre louer    -->
                <div class="radio_vendre_louer">
                    <div class="radio_vendre">
                        <input type="radio" name="vendre_louer" id="vendre" value="Vendre" class="input_radio" checked onclick="afficher_formulaire()">
                        <label for="vendre" class="label_radio">Vendre</label>
                    </div>
                    <div class="radio_louer">
                        <input type="radio" name="vendre_louer" id="louer" value="Louer"  class="input_radio" onclick="afficher_formulaire()">
                        <label for="louer" class="label_radio">Louer</label>
                    </div>
                </div>



				<div class="d-flex justify-content-center form_container" id="form_vendre_louer">


                    <!-- formulaire de vente  -->	
                    
                    <form enctype="multipart/form-data" action="" method="post" class="form_inscription" id="form_vendre">
                             
                            <span class="span_deposer_annonce">Titre de l'annonce</span>
                            <div class="input-group mb-3">
                            <input type="text" name="titre" class="form-control input_user" placeholder="Titre de l'annonce" required ><br>
                            <span id="etat_titre"></span>
                            </div>

                            
                            <!--     wilaya         -->
                            <span class="span_deposer_annonce">Localisation du bien</span>
                            <div class="input-group mb-3">
                            
                                <SELECT id="wilaya" name="wilaya" class="form-control input_user" onchange="filtre_daira()" required>
                                    <option value="" disabled selected> Wilaya</option>
                                    <option value="01-Tizi-Ouzou">Tizi-Ouzou</option>
                                    <option value="02-Béjaïa">Béjaïa</option>
                                    <option value="03-Bouira">Bouira</option>
                                    
                                </SELECT>
                            <span id="etat_wilaya"></span>   
                            
                            </div>

                            <!--*********   liste des dairas de tizi ouzou   **********-->
                            <div class="input-group mb-3">
                           
                                <SELECT id="daira" name="daira" class="form-control input_user" onchange="filtre_commune()" required>
                                    <option value="" disabled selected> Daïra</option>
                                    
                                </SELECT>
                                
                            <!--*********   liste des communes de tizi ouzou   **********-->
                            </div>
                            <div class="input-group mb-3"> 
                               
                                <SELECT id="commune"  name="commune" class="form-control input_user"required>
                                    <option value="" disabled selected>Commune</option>
                                
                                </SELECT>


                            </div>
                            <div class="input-group mb-3">
                            <input type="text" name="adresse" class="form-control input_user" placeholder="Adresse" required>
                            </div>
                            <span class="span_deposer_annonce">Caractéristiques du bien</span>

                            <div class="input-group mb-3">
                            <SELECT id="daira" name="type_bien" class="form-control input_user" required>
                                    <option value="" disabled selected>Type du bien</option>
                                    <option value="appartement">Appartement</option>
                                    <option value="studio">Studio</option>
                                    <option value="villa">Villa</option>
                                    <option value="niveau de villa">Niveau de villa</option>
                                    <option value="Local">Local</option>
                                    <option value="duplex">Duplex</option>
                                   
                            </SELECT>
                            </div>
                            
                            <div class="input-group mb-3">
                            <input type="number" name="surface" class="form-control input_user" placeholder="Surface en m²"  required>
                            </div>

                            <div class="input-group mb-3">
                            <input type="number" name="nbr_etages" class="form-control input_user" placeholder="Etage(s)" required>
                            </div>

                            <div class="input-group mb-3">
                            <input type="number" name="nbr_pieces" class="form-control input_user" placeholder="Nombre de piéces" required>
                            </div>
                           
                            <span class="span_deposer_annonce">Description de votre bien</span>
                            <textarea name="description" cols="35"  rows="10" class="discription_annonce" placeholder="Description du bien" required></textarea><br>
                            <span class="span_deposer_annonce">Photos du bien</span>
                            <div class="input-group mb-3">

                            <input type="file" name="image_annonce" class="btn login_btn" id="btn_image" required><br>
                            </div>
                            <span class="span_deposer_annonce">Prix du bien</span>
                            <div class="input-group mb-3">
                            <input type="number" name="prix" class="form-control input_user" placeholder="Prix du bien en DA" step="100000" required>
                            </div>

                            <div class="input-group mb-3">
                            <input type="submit" value="deposer l'annonce" class="btn login_btn" name="submit" onclick="alert('Votre annonce sera vérifiée et publiée éventuellement');">
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

                                        echo "Votre annonce sera vérifiée et publiée ";
                                            

                                            
                                    
                                    //   insertion dans la base de donnee
                                    $proprio=$_SESSION["nom"].' '.$_SESSION["prenom"];  
                                    $insert=$db->prepare('INSERT INTO demande_annonce VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                                    $insert->execute(array($_POST["titre"],$_POST["description"],$_POST["wilaya"],$_POST["daira"],$_POST["commune"],$_POST["adresse"],$_POST["type_bien"],$_POST["surface"],$_POST["nbr_etages"],$_POST["nbr_pieces"],$_POST["prix"],$lien_img,$proprio));
                                    ?>
                                    <meta http-equiv="refresh" content="0;url=./deposer_annonce.php" />
                                    <?php
                                }


                            ?>

                    </form>
<!--*******************************************************************************************************************************************************************************************-->
                    <!-- formulaire de location  -->	
                    <form enctype="multipart/form-data" action="" method="post" class="form_inscription" id="form_louer">
                            
                            <span class="span_deposer_annonce">Titre de l'annonce</span>
                            <div class="input-group mb-3">
                            <input type="text" name="titre_loc" class="form-control input_user" placeholder="Titre de l'annonce" required><br>
                            </div>

                            
                            <!--*********   liste des dairas de tizi ouzou   **********-->
                            <span class="span_deposer_annonce">Localisation du bien</span>
                            <div class="input-group mb-3">
                            <span></span>
                                <SELECT id="wilaya_loc" name="wilaya_loc" class="form-control input_user" onchange="filtre_daira_loc()" required>
                                    <option value="" disabled selected> Wilaya</option>
                                    <option value="01-Tizi-Ouzou">Tizi-Ouzou</option>
                                    <option value="02-Béjaïa">Béjaïa</option>
                                    <option value="03-Bouira">Bouira</option>
                                    
                                </SELECT>
                                
                            <!--*********   liste des communes de tizi ouzou   **********-->
                            </div>


                            <div class="input-group mb-3">
                            <span></span>
                                <SELECT id="daira_loc" name="daira_loc" class="form-control input_user" onchange="filtre_commune_louer()" required>
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
                                <SELECT id="commune"  name="commune_loc" class="form-control input_user"required>
                                    <option value="" disabled selected>Commune</option>
                                
                                </SELECT>


                            </div>
                            <div class="input-group mb-3">
                            <input type="text" name="adresse_loc" class="form-control input_user" placeholder="Adresse" required>
                            </div>
                            <span class="span_deposer_annonce">Caractéristiques du bien</span>

                            <div class="input-group mb-3">
                            <SELECT id="daira" name="type_bien_loc" class="form-control input_user" required>
                                    <option value="" disabled selected>Type du bien</option>
                                    <option value="appartement">Appartement</option>
                                    <option value="studio">Studio</option>
                                    <option value="villa">Villa</option>
                                    <option value="niveau de villa">Niveau de villa</option>
                                    <option value="Local">Local</option>
                                    <option value="duplex">Duplex</option>
                                   
                                </SELECT>
                            </div>
                            
                            <div class="input-group mb-3">
                            <input type="number" name="surface_loc" class="form-control input_user" placeholder="Surface en m²"  required>
                            </div>

                            <div class="input-group mb-3">
                            <input type="number" name="nbr_etages_loc" class="form-control input_user" placeholder="Etage(s)" required>
                            </div>

                            <div class="input-group mb-3">
                            <input type="number" name="nbr_pieces_loc" class="form-control input_user" placeholder="Nombre de piéces" required>
                            </div>
                           
                            <span class="span_deposer_annonce">Description de votre bien</span>
                            <textarea name="description_loc" cols="35"  rows="10" class="discription_annonce" placeholder="Description du bien" required></textarea><br>
                            <span class="span_deposer_annonce">Photos du bien</span>
                            <div class="input-group mb-3">

                            <input type="file" name="image_annonce_loc" class="btn login_btn" id="btn_image" required><br>
                            </div>
                            <span class="span_deposer_annonce">Prix du bien</span>
                            <div class="input-group mb-3">
                            <input type="number" name="prix_loc" class="form-control input_user" placeholder="Loyer/mois en DA" step="1000" required>
                            </div>

                            <div class="input-group mb-3">
                            <input type="submit" value="deposer l'annonce" class="btn login_btn" name="submit_loc" onclick="alert('Votre annonce sera vérifiée et publiée éventuellement');">
                            </div>
                            
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

                                        echo "Votre annonce sera vérifiée et publiée ";
                                            

                                            
                                    
                                    //   insertion dans la base de donnee
                                    $proprio=$_SESSION["nom"].' '.$_SESSION["prenom"]; 
                                    $insert=$db->prepare('INSERT INTO demande_annonce_location VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                                    $insert->execute(array($_POST["titre_loc"],$_POST["description_loc"],$_POST["wilaya_loc"],$_POST["daira_loc"],$_POST["commune_loc"],$_POST["adresse_loc"],$_POST["type_bien_loc"],$_POST["surface_loc"],$_POST["nbr_etages_loc"],$_POST["nbr_pieces_loc"],$_POST["prix_loc"],$lien_img,$proprio));
                                    ?>
                                    <meta http-equiv="refresh" content="0;url=./deposer_annonce.php" />
                                    <?php
                                }


                            ?>

                    </form>    

				</div>
		
				
			</div>
		</div>
	</div>
   </div>
   <?php
}

  include_once("../includes/footer.php");
   ?>
<script type="text/javascript">
 window.onload = afficher_formulaire();

 </script> 


</body>
</html>