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

                        <textarea name="description" cols="35"  rows="10" class="discription_annonce" placeholder="Description du bien" require></textarea><br>
                        <!--*********   liste des dairas de tizi ouzou   **********-->
                        
                        <div class="input-group mb-3">
                        <input list="daira" name="daira" class="form-control input_user" placeholder="Daïra" require>
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
                        </div>
                        <div class="input-group mb-3">
                        <input list="commune" name="commune" class="form-control input_user" placeholder="Commune" require>
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

                                   
                                        echo $id_img[0];
                                    

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





    

    
</body>
</html>